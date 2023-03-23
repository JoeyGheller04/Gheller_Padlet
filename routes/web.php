<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WallsController;
use Illuminate\Support\Facades\Route;

use App\Models\Walls;

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

/******************************************************************************/
/**************** HOME ********************************************************/
/******************************************************************************/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('home', function () {

    return view('home');
})->name('home');

/******************************************************************************/
/**************** WALL ********************************************************/
/******************************************************************************/

Route::get('wall_creation', function () {

    return view('wall_creation');
})->name('wall_creation');


Route::get('wall_selection', [WallsController::class, 'index'])->name('wall_selection');

Route::get('wal/{id}', [WallsController::class, 'getWall'])->name('wall');

/******************************************************************************/
/**************** AUTH ********************************************************/
/******************************************************************************/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
