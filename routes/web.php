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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('index');
});

Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('/suvenir', function () {
    return view('suvenir');
});

Route::get('/kontakkami', function () {
    return view('kontakkami');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi');
});

Route::get('/syarat&ketentuan', function () {
    return view('syarat&ketentuan');
});

Route::get('/suvenirdetails', function () {
    return view('suvenirdetails');
});

Route::get('/suvenirdetails1', function () {
    return view('suvenirdetails1');
});

Route::get('/suvenirdetails2', function () {
    return view('suvenirdetails2');
});

Route::get('/suvenirdetails3', function () {
    return view('suvenirdetails3');
});

Route::get('/suvenirdetails4', function () {
    return view('suvenirdetails4');
});

Route::get('/suvenirdetails5', function () {
    return view('suvenirdetails5');
});

Route::get('/suvenirdetails6', function () {
    return view('suvenirdetails6');
});

Route::get('/suvenirdetails7', function () {
    return view('suvenirdetails7');
});

