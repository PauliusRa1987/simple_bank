<?php
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('index', [AccountController::class, 'index'])->name('account.index');
Route::get('create', [AccountController::class, 'create'])->name('account.create');
Route::post('store', [AccountController::class, 'store'])->name('account.store');
Route::get('edit/{account}', [AccountController::class, 'edit'])->name('account.edit');
Route::put('update/{account}', [AccountController::class, 'update'])->name('account.update');
Route::delete('delete/{account}', [AccountController::class, 'destroy'])->name('account.destroy');