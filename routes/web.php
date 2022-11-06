<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderMngController;
use App\Http\Controllers\NewsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->middleware(['auth:admin', 'verified'])->name('dashboard');

    Route::get('/mypage', [AdminController::class, 'mypage'])
        ->middleware(['auth:admin', 'verified'])->name('mypage');

    Route::get('/order-mng', [OrderMngController::class, 'index'])
    ->middleware(['auth:admin', 'verified'])->name('order_mng.index');

    Route::get('/order-mng/{id}', [OrderMngController::class, 'show'])
    ->middleware(['auth:admin', 'verified'])->name('order_mng.show');

    require __DIR__ . '/admin.php';
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
