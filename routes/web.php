<?php

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

use App\Http\controllers\Admin\NewsController;
Route::Controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});



Route::controller(AAAController::class)->group(function() {
    Route::get('XXX/create', 'bbb');
});



use App\Http\controllers\Admin\ProfileController;
Route::Controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('profile/create', 'add');
    Route::get('profile/edit', 'edit');
});
