<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_data_show()
    {
        $users = User::all();

        return view('master.user.user_data', compact('users'));
    }

    public function detail_user($id)
    {
        $users = User::find($id);
        // dd($users);
        return view('master.user.user_detail', compact('users'));
    }
}
