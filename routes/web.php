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
// -----user--------
Route::get('/', function () {
    return view('/user/index');
});
Route::get('/login', function () {
    return view('user/login');
});
Route::get('/home', function(){
    return view('user/index');
});
Route::get('/repository', function(){
    return view('user/repository');
});
Route::get('/about', function(){
    return view('user/about');
});
// -----------------

// -------Admin------
Route::get('/admin', function () {
    return view('/admin/adminindex');
});
Route::get('/unverified', function () {
    return view('/admin/unverified');
});
Route::get('/verified', function () {
    return view('/admin/verified');
});

// -------BLK------
Route::get('/blk', function () {
    return view('/blk/blkindex');
});