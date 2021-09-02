<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update_photo_profile(Request $request, $id)
    {
        // dd($request->all());
        if ($request->photo == null) {
            return back()->withErrors(['photo' => 'You have to enter your profile photo']);
        } else {
            $users = User::find($id);
            $image = $request->photo;

            $image_name = $image->getClientOriginalName();
            $users->photo = $image_name;

            $image->move(public_path() . '/photo_profile', $image_name);
            $users->update();

            return redirect()->route('profile')->with('success', 'Image has been successfully changed');
        }
    }

    public function update_profile_information(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'gender' => 'required',
            'age' => 'required',
            'tlp_number' => 'required',
            'address' => 'required',
        ]);

        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->gender = $request->gender;
        $users->age = $request->age;
        $users->tlp_number = $request->tlp_number;
        $users->address = $request->address;

        $users->update();

        return redirect()->route('profile')->with('success', 'Data has been successfully changed');
    }

    public function update_password()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $currentPassword = auth()->user()->password;
        // dd($currentPassword);
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentPassword)) {
            auth()->user()->update([
                'password' => bcrypt(request('password')),
            ]);
            return back()->with('success', 'Your password has been changed');
        } else {
            return back()->withErrors(['old_password' => 'Make sure you fill your current password']);
        }
    }

    public function delete_account(Request $request, $id)
    {
        $users = User::find($id);

        // dd($users);
        $users->delete($request->all());
        return redirect()->route('logout');
    }
}
