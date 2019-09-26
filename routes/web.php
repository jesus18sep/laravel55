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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/' , 'PrimerController@index');

Route::get('/producto' , 'PrimerController@product');

Route::get('/' , 'TemplateController@index');

Route::get('/index2' , 'TemplateController@index2');

Route::get('/index3' , 'TemplateController@index3');