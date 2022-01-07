<?php

use Illuminate\Support\Facades\Route;
use App\Events\LoadAgain;

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
    // LoadAgain::dispatch('data diganti');
    event(new LoadAgain('Hello Echo'));

    return view('welcome');
});
