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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/play/{id}', 'QuestionController@quiz');

Route::post('/play/{id}', 'QuestionController@next');

// Route::get('/reglas', function(){
//   return view('reglas');
// });
//



// COMENTO PARA NO ROMPER LO QUE TENIAMOS
// Route::get('/addQuestion', function(){
//   return view("addQuestion");
// });
//
// Route::post('/addQuestion', 'QuestionController@addQuestion');
//
// Route::get('/addAnswer', function(){
//   return view("addAnswer");
// });
//
// Route::post('/addAnswer', 'QuestionController@addAnswer');
