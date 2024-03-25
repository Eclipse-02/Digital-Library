<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    // BookController
    Route::group(['prefix' => 'books'], function() {
        Route::get('/', [BookController::class, 'index'])->name('books.index');
        Route::post('/', [BookController::class, 'store'])->name('books.store');
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::get('/{book}', [BookController::class, 'show'])->name('books.show');
        Route::match(['put', 'patch'], '/{book}', [BookController::class, 'update'])->name('books.update');
        Route::delete('/{book}', [BookController::class, 'destroy'])->name('books.destroy');
        Route::get('/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    });

    // BorrowingController
    Route::group(['prefix' => 'borrowings'], function() {
        Route::get('/', [BorrowingController::class, 'index'])->name('borrowings.index');
        Route::post('/', [BorrowingController::class, 'store'])->name('borrowings.store');
        Route::get('/create', [BorrowingController::class, 'create'])->name('borrowings.create');
        Route::get('/{borrowing}', [BorrowingController::class, 'show'])->name('borrowings.show');
        Route::match(['put', 'patch'], '/{borrowing}', [BorrowingController::class, 'update'])->name('borrowings.update');
        Route::delete('/{borrowing}', [BorrowingController::class, 'destroy'])->name('borrowings.destroy');
        Route::get('/{borrowing}/edit', [BorrowingController::class, 'edit'])->name('borrowings.edit');
    });

    // CategoryController
    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
        Route::match(['put', 'patch'], '/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    });

    // PublisherController
    Route::group(['prefix' => 'publishers'], function() {
        Route::get('/', [PublisherController::class, 'index'])->name('publishers.index');
        Route::post('/', [PublisherController::class, 'store'])->name('publishers.store');
        Route::get('/create', [PublisherController::class, 'create'])->name('publishers.create');
        Route::get('/{publisher}', [PublisherController::class, 'show'])->name('publishers.show');
        Route::match(['put', 'patch'], '/{publisher}', [PublisherController::class, 'update'])->name('publishers.update');
        Route::delete('/{publisher}', [PublisherController::class, 'destroy'])->name('publishers.destroy');
        Route::get('/{publisher}/edit', [PublisherController::class, 'edit'])->name('publishers.edit');
    });

});