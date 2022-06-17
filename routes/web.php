<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::prefix('F8ckGroup')->group( function(){
    Route::get('User1',function(){
        echo "user1";
    });
    Route::get('User2', function () {
        echo "user2";
    });
    Route::get('User3', function () {
        echo "user3";
    });
}
); 

Route::get('abc',[UserController::class, 'Hi']);

Route::get('sum', [SumController::class, 'GetValue']);
Route::post('sum', [SumController::class, 'Result']);

Route::get('signup', [SignupController::class, 'index']);
Route::post('signup', [SignupController::class, 'displayInfor']);


Route::get('room', [AdminController::class, 'index']);
Route::post('room', [AdminController::class, 'addRoom']);
Route::get('home', [HomeController::class, 'index']);