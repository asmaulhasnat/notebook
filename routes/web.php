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
Route::group(['middleware'=>'auth'], function () {

Route::get('/', function () {
    return view('frontpage');
});

//Route::get('/notebooks',['as'=>'notebooks.index','uses'=>'Notebookscontroller@index']);
//Route::post('/notebooks','Notebookscontroller@store');
//Route::get('/notebooks/create','Notebookscontroller@create');
//Route::get('/notebooks/{notebooks}/edit','Notebookscontroller@edit');
//Route::put('/notebooks/{notebooks}','Notebookscontroller@update');
//Route::delete('/notebooks/{notebooks}','Notebookscontroller@destroy');
//Route::get('/notebooks/{notebooks}','Notebookscontroller@show');

Route::resource('notebooks','Notebookscontroller');
Route::resource('notes','Notescontroller'); 
Route::get('/notes/{notes}/createNote','Notescontroller@createNote')->name('notes.createNote'); 


});




Auth::routes();

//Route::get('/home', 'HomeController@index');
