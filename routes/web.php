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
    return redirect('/mahasiswa');
});

Route::get('/mahasiswa', function () {
    $mhs = [["2440017630", "Jesse", "IS", 3.8], ["2440011955", "Kevin", "IS", 3.8], ["2440078411", "Alvon", "IS", 3.9],
        ["2440037456", "Ezra", "GT", 3.6], ["2440025872", "Juan", "GT", 3.6]];
    return view('mahasiswa')
        ->with('mahasiswa', $mhs);
});

Route::get('/matakuliah', function () {
    $mtk = [["COMP6062001", "Compilation Technique", 5], ["COMP7116001", "Computer Vision", 3], ["COMP6587001", "Deep Learning", 3],
        ["LANG6027001", "Indonesia", 5], ["COMP6681001", "Web Programming", 3], ["COMP6697001", "Operating System", 2]];
//    $mtk = [];
    return view('matakuliah')
        ->with('matkul', $mtk);
});
