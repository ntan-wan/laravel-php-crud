<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/contacts',[ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/add-contact',[ContactController::class, 'add'])->name('contact.add');
Route::get('/contacts/{contact}/edit',[ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contacts',[ContactController::class, 'create'])->name('contact.create');
Route::put('/contacts/{contact}/update',[ContactController::class, 'update'])->name('contact.update');
Route::delete('/contacts/{contact}/delete',[ContactController::class, 'delete'])->name('contact.delete');
Route::get('/contacts/search-contact',[ContactController::class, 'search_contact'])->name('contact.search_contact');
Route::get('/contacts/search',[ContactController::class, 'search'])->name('contact.search');


