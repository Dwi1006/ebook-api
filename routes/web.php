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

Route::get('coba', function() {
    return "haloooo dek";
});

Route::get('coba1', function() {
    return ['rafi, rahmat, jarwo'];
});

Route::get('coba2', function() {
    return [
        'Nama' => 'Rizky Dwi Saputra',
        'Nis' => 3103120200,
        'Kelas' => 'XII RPL 6'
    ]; 
});

Route::get('coba3', function(){
    return responce()->json(
        [
            'Nama' => 'Rizky Dwi Saputra',
            'Kelas' => 'XII RPL 6',
            'Nis' => 3103120200
        ], 201
    );
});