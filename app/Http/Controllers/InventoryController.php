<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

use function PHPUnit\Framework\isEmpty;

class InventoryController extends Controller
{
    public function show()
    {
        $inventories = Inventory::all();

        return view('master.inventory.inventory_show', compact('inventories'));
    }

    public function inventory_insert(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'qty' => 'required',
        ]);

        // dd($request->all());
        // dd($request->code);
        $inventories = Inventory::find($request->code);
        // dd($inventories);

        if ($inventories == null) {
            $inventories = new Inventory;

            $inventories->code = $request->code;
            $inventories->name = $request->name;
            $inventories->price = $request->price;
            $inventories->qty = $request->qty;

            $inventories->save();
            return redirect()->route('inventory_add')->with('success', 'Data has been successfully added');
        } else {
            $qty = $inventories->qty + $request->qty;
            // dd($qty);
            $inventories->qty = $qty;

            $inventories->save();
            return redirect()->route('inventory_add')->with('success', 'Data has been successfully added');
        }
    }

    public function inventory_edit($id)
    {
        $inventories = Inventory::find($id);
        // dd($inventories);
        return view('master.inventory.inventory_edit', compact('inventories'));
    }

    public function update_inventory(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'qty' => 'required',
        ]);
        $inventories = Inventory::find($id);

        $inventories->code = $request->code;
        $inventories->name = $request->name;
        $inventories->price = $request->price;
        $inventories->qty = $request->qty;

        $inventories->save();
        return redirect()->route('inventory')->with('success', 'Data has been successfully updated');
    }

    public function delete_inventory($id)
    {
        $inventories = Inventory::find($id);

        $inventories->delete();
        return redirect()->route('inventory')->with('success', 'Data has been successfully updated');
    }

    public function restore_inventory(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $inventories = Inventory::withTrashed()->where('code', $request->code)->get();
        // dd($suppliers);
        if ($inventories->isEmpty()) {
            return back()->withErrors(['code' => 'Make sure you fill item code']);
        } else {
            Inventory::withTrashed()
                ->where('code', $request->code)
                ->restore();

            return redirect()->route('inventory')->with('success', $request->code . ' has been successfully restored');
        }
    }
}
