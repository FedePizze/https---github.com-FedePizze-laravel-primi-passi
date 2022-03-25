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

    $data = [
        'index1' => 'Prima Pagina',
        'index2' => 'Seconda Pagina',
        'index3' => 'Terza Pagina',
    ];

    return view('index1', $data);
});

Route::get('index2', function () {

    $data = [
        'index1' => 'Prima Pagina',
        'index2' => 'Seconda Pagina',
        'index3' => 'Terza Pagina',
    ];

    return view('index2', $data);
});

Route::get('index3', function () {

    $data = [
        'index1' => 'Prima Pagina',
        'index2' => 'Seconda Pagina',
        'index3' => 'Terza Pagina',
    ];

    return view('index3', $data);
});

