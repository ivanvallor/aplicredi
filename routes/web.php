<?php

use App\Models\Demand;
use App\Models\User;
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
    return view('app');
});

Route::get('/user/{user}',function(\App\Models\User $user){
    return $user;
});

// Route::get('/user/{user}', [UserController::class, 'singin']);


Route::get('/demand/{demand}', function(\App\Models\Demand $demand){
    return $demand;
});
