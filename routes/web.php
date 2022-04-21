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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/body', function () {
    return view('dashboard.teams');
});

Route::get('/addnewcategory', function () {
    return view('dashboard.add_new_category');
});
Route::get('/editnewcategory', function () {
    return view('dashboard.add_new_category_edit');
});
Route::get('/chart', function () {
    return view('dashboard.charts');
});
Route::get('/chat', function () {
    return view('dashboard.chats');
});
Route::get('/datatable', function () {
    return view('dashboard.datatable');
});
Route::get('/datatable2', function () {
    return view('dashboard.datatable2');
});
Route::get('/order_semmary', function () {
    return view('dashboard.order_summery_client');
});
Route::get('/order_semmary_merchain', function () {
    return view('dashboard.order_summery_merchain');
});
Route::get('/todo', function () {
    return view('dashboard.todo');
});




Route::get('/setting', function () {
    return view('dashboard.setting');
});
Route::get('/teams', function () {
    return view('dashboard.teams');
});
Route::get('/time_monitorings', function () {
    return view('dashboard.time_monitorings');
});
Route::get('/kolloko', function () {
    return view('dashboard.kolloko');
});

// ////////////////////// subscription ///////////////////////////////////////////////
Route::get('/subscription', function () {
    return view('subscription.index');
});
Route::get('/subscription/create-account', function () {
    return view('subscription.index');
});
Route::get('/subscription/confirm-information', function () {
    return view('subscription.index');
});
Route::get('/subscription/payment-information', function () {
   return view('subscription.index');
});
Route::get('/subscription/summary', function(){
    return view('subscription.index');});
