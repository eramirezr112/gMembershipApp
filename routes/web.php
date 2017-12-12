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
    return view('index');
});

// CRUD Group
Route::get('/api/group/{id?}'  , 'GroupController@index');
Route::post('/api/group'       , 'GroupController@store');
Route::post('/api/group/{id}'  , 'GroupController@update');
Route::delete('/api/group/{id}', 'GroupController@destroy');

// CRUD Type
Route::get('/api/type/{id?}'  , 'TypeController@index');
Route::post('/api/type'       , 'TypeController@store');
Route::post('/api/type/{id}'  , 'TypeController@update');
Route::delete('/api/type/{id}', 'TypeController@destroy');

// CRUD Individual
Route::get('/api/individual/{id?}'  , 'IndividualController@index');
Route::post('/api/individual'       , 'IndividualController@store');
Route::post('/api/individual/{id}'  , 'IndividualController@update');
Route::delete('/api/individual/{id}', 'IndividualController@destroy');

// CRUD Members
Route::get('/api/member/{id?}'    , 'MemberController@index');
Route::post('/api/member/add'     , 'MemberController@store');
Route::post('/api/member/remove', 'MemberController@destroy');