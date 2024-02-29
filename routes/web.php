<?php
/*******************************
    Author : Sibin V M
    Title : Web Routes
    Created Date : 10-06-2022
********************************/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'index'])->name('home'); // show homepage

Route::prefix('blog')->name('blog.')->group(function () {

    Route::get('show/{blog}', [BlogController::class, 'show'])->name('show'); // show posts

    Route::get('create', [BlogController::class, 'create'])->name('create'); // form for creating a post

    Route::post('create', [BlogController::class, 'store'])->name('store'); // insert data using created post form

    Route::get('edit/{blog}', [BlogController::class, 'edit'])->name('edit'); // edit post form

    Route::put('edit/{blog}', [BlogController::class, 'update'])->name('update'); // update data using update form

    Route::delete('delete/{blog}', [BlogController::class, 'destroy'])->name('destroy'); // delete a post

});

Route::fallback(function () { 
    return redirect()->route('home'); // if no route is matched then redirect to the home page
});