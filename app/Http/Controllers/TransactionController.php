<?php

namespace App\Http\Controllers;

use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show()
    {
        $inventories = Inventory::all();

        return view('master.transaction.transaction_show', compact('inventories'));
    }

    public function data_transaction(Request $request, $id)
    {
        $inventories = Inventory::find($id);

        return view('master.transaction.transaction_detail', compact('inventories'));
    }

    public function count_transaction(Request $request, $id)
    {
        // dd($id);
        $inventories = Inventory::find($id);
        $qty = $request->qty;

        $total = $inventories->price * $qty;

        return view('master.transaction.transaction_count', compact('inventories', 'total', 'qty'));
    }

    public function pay_transaction(Request $request, $id)
    {
        // dd($id);

        $transactions = new Transaction;

        $transactions->code = $request->code;
        $transactions->name = $request->name;
        $transactions->price = $request->price;
        $transactions->qty = $request->qty;
        $transactions->total = $request->total;

        $transactions->save();

        $inventories = Inventory::find($id);
        $qty = $inventories->qty - $request->qty;

        $inventories->qty = $qty;
        $inventories->save();

        return redirect()->route('transaction')->with('success', 'Transaction has been successfully');
    }

    public function transaction_data()
    {
        $transactions = Transaction::all();

        return view('master.transaction.transaction_data', compact('transactions'));
    }

    public function edit_transaction($id)
    {
        $transactions = Transaction::find($id);

        return view('master.transaction.transaction_edit', compact('transactions'));
    }

    public function update_transaction(Request $request, $id)
    {
        $transactions = Transaction::find($id);

        $transactions->code = $request->code;
        $transactions->name = $request->name;
        $transactions->price = $request->price;
        $transactions->qty = $request->qty;
        $transactions->total = $request->total;

        $transactions->save();

        return redirect()->route('transaction_data')->with('success', 'Data Transaction has been successfully updated');
    }

    public function delete_transaction($id)
    {
        $transactions = Transaction::find($id);

        $transactions->delete();

        return redirect()->route('transaction_data')->with('success', 'Data Transaction has been successfully updated');
    }

    public function print_transaction()
    {
        return Excel::download(new TransactionExport, 'transaction_report.xlsx');
    }
}
