<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::count();
        // dd($users);
        $inventories = Inventory::count();

        $transactions = Transaction::count();

        return view('dashboard', compact('users', 'inventories', 'transactions'));
    }
}
