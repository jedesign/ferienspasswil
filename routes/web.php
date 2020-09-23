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
//    $user =     \App\Models\User::first();
//    dd($user->guardian()->toSql());
//    dd($user->employee()->toSql());
//    dd($user->fullname().', '.$user->role->address());
//    dd(\App\Models\User::find(1)->guardian->participants->first()->firstname);
    return view('welcome');
});
