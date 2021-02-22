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

Route::get('success', function () {
    alert()->success('Success Message', 'Good Job!');
    return redirect('/');
});

Route::get('error', function () {
    alert()->error('Something went wrong', 'Oops!')->persistent('Close');
    return redirect('/');
});

Route::get('info', function () {
    alert()->info('Info Message', 'Email was sent!');
    return redirect('/');
});

Route::get('warning', function () {
    alert()->warning('Warning Message', 'Warning');
    return redirect('/');
});