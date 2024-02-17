<?php

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Helpers;


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

Route::get('testing', function () {
    // return fake()->sentence(rand(1, 3));

    return User::all()->random();
});
