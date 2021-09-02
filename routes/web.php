<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get(
    '/dashboard',
    [DashboardController::class, 'dashboard']
)->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';


// Admin_Master_User
Route::get(
    '/user_data',
    [UserController::class, 'user_data_show']
)->name('user_data');

Route::get(
    '/detail_user/{id}',
    [UserController::class, 'detail_user']
)->name('detail_user');

Route::get(
    '/set_as_admin/{id}',
    [UserController::class, 'set_as_admin']
)->name('set_as_admin');

Route::get(
    '/set_as_officer/{id}',
    [UserController::class, 'set_as_officer']
)->name('set_as_officer');

Route::get(
    '/set_as_customer/{id}',
    [UserController::class, 'set_as_customer']
)->name('set_as_customer');

Route::get(
    '/delete_user/{id}',
    [UserController::class, 'delete_user']
)->name('delete_user');


// Inventory

Route::get(
    '/inventory',
    [InventoryController::class, 'show']
)->name('inventory');

Route::get('/add_inventory', function () {
    return view('master.inventory.inventory_add');
})->name('inventory_add');

Route::post(
    '/insert_inventory',
    [InventoryController::class, 'inventory_insert']
)->name('inventory_insert');

Route::get(
    'edit_inventory/{id}',
    [InventoryController::class, 'inventory_edit']
)->name('edit_inventory');

Route::post(
    '/update_inventory/{id}',
    [InventoryController::class, 'update_inventory']
)->name('update_inventory');

Route::get(
    '/delete_inventory/{id}',
    [InventoryController::class, 'delete_inventory']
)->name('delete_inventory');

Route::post(
    '/restore_inventory',
    [InventoryController::class, 'restore_inventory']
)->name('restore_inventory');


// Transaction
Route::get(
    '/transaction',
    [TransactionController::class, 'show']
)->name('transaction');

Route::get(
    '/buy/{id}',
    [TransactionController::class, 'data_transaction']
)->name('buy');

Route::post(
    '/count/{id}',
    [TransactionController::class, 'count_transaction']
)->name('transaction_count');

Route::post(
    '/pay/{id}',
    [TransactionController::class, 'pay_transaction']
)->name('transaction_pay');

Route::get(
    '/transaction_data',
    [TransactionController::class, 'transaction_data']
)->name('transaction_data');

Route::get(
    '/edit_transaction/{id}',
    [TransactionController::class, 'edit_transaction']
)->name('edit_transaction');

Route::post(
    '/update_transaction/{id}',
    [TransactionController::class, 'update_transaction']
)->name('update_transaction');

Route::get(
    '/delete_transaction/{id}',
    [TransactionController::class, 'delete_transaction']
)->name('delete_transaction');

Route::get(
    '/print_transaction',
    [TransactionController::class, 'print_transaction']
)->name('print_transaction');


// Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post(
    '/update_photo_profile/{id}',
    [ProfileController::class, 'update_photo_profile']
)->name('update_photo_profile');

Route::post(
    '/update_profile_information/{id}',
    [ProfileController::class, 'update_profile_information']
)->name('update_profile');

Route::patch(
    '/update_password',
    [ProfileController::class, 'update_password']
)->name('update_password');

Route::get(
    '/delete_account/{id}',
    [ProfileController::class, 'delete_account']
)->name('delete_account');
