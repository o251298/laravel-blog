<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
Route::post('language', function (){
    $local = request()->all('language');
    session(['my_locale' => $local['language']]);
    return redirect()->back();
})->name('language');


Route::get('/', [\App\Http\Controllers\PhoneController::class, 'index']);
Route::get('/comment', [\App\Http\Controllers\PostController::class, 'index']);
//Route::resource('users', 'UserController')->except(['edit', 'update']); except - исключает данные маршрукты для всех
Route::get('users/test/{user}/active', [UserController::class, 'test']);
Route::get('users/api', [UserController::class, 'api']);
Route::get('users/{locale}/list', [UserController::class, 'list']);
Route::resource('users', 'UserController')->middleware('local');

