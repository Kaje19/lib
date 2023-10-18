<?php

use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LibrarianController::class,'login'])->name('librarian.login');
Route::get('/register',[LibrarianController::class,'register']);
Route::post('/librarian',[LibrarianController::class,'store'])->name('librarian.store');
Route::post('/Authentication', [LibrarianController::class,'librarianAuthentication'])->name('librarian.authentication');
Route::get('/dashboard', [BookController::class,'index'])->name('dashboard');
Route::post('/book-form',[BookController::class,'store'])->name('book.store');
Route::get('edit-book/{id}',[BookController::class,'edit'])->name('book.updateform');
Route::get('/return',[BookController::class,'return'])->name('dashboard.return');
Route::put('update-book/{id}',[BookController::class,'update']);
Route::delete('delete-book/{book}',[BookController::class,'destroy'])->name('destroy.book');

Route::get('logout', function () {
    return view('welcome');
});