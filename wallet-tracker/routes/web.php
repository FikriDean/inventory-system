<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('landing');
    })->name('home');

    Route::any('/warehouse/{code}', [WarehouseController::class, 'index'])->name('warehouse.index');
    Route::any('/warehouse/{code}/edit', [WarehouseController::class, 'edit'])->name('warehouse.edit');
    
    Route::any('/warehouse/{code}/partners', [PartnerController::class, 'index'])->name('partner.index');
    Route::any('/warehouse/{code}/partners/edit', [PartnerController::class, 'edit'])->name('partner.edit');
    
    Route::any('/warehouse/{code}/producttypes', [ProductTypeController::class, 'index'])->name('producttype.index');
    Route::any('/warehouse/{code}/producttypes/edit', [ProductTypeController::class, 'edit'])->name('producttype.edit');
    
    Route::any('/warehouse/{code}/products', [ProductController::class, 'index'])->name('product.index');
    Route::any('/warehouse/{code}/products/edit', [ProductController::class, 'edit'])->name('product.edit');
    
    Route::any('/warehouse/{code}/roles', [RoleController::class, 'index'])->name('role.index');
    Route::any('/warehouse/{code}/roles/edit', [RoleController::class, 'edit'])->name('role.edit');
    
    Route::any('/warehouse/{code}/orders', [OrderController::class, 'index'])->name('order.index');
    Route::any('/warehouse/{code}/orders/create', [OrderController::class, 'create'])->name('order.create');
    Route::any('/warehouse/{code}/orders/{book}', [OrderController::class, 'show'])->name('order.show');
    
    Route::any('/warehouse/{code}/transactions', [TransactionController::class, 'index'])->name('transaction.index');
    Route::any('/warehouse/{code}/transactions/{book}', [TransactionController::class, 'show'])->name('transaction.show');
    Route::any('/warehouse/{code}/transactions/{book}/receipt', [TransactionController::class, 'uploadReceipt'])->name('transaction.receipt');

    Route::any('/profile/{username}', [ProfileController::class, 'index'])->name('profile.index');
    
    // (!-!)
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // (!--!)

    Route::any('/invitations/{username}', [InvitationController::class, 'index'])->name('invitation.index');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
