<?php

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

Route::get('/testDB', function(){
    DB::insert('insert into user (name) values (?)', ['sampleuser']);
    $results = DB::table('user')->get();
    return $results;
});

Route::get('/testCache', function(){
    Cache::put('name', 'aaa',100);
    return Cache::get('name');
});