<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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

// "建物です"と表示させる
Route::get ( '/building' , [TestController::class , 'building' ]);

// "部屋番号は[room]です"と表示
Route::get( '/building/{room}' , [TestController::class , 'room' ]);