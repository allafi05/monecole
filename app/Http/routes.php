<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::when('*', 'csrf', ['post', 'put', 'delete']);
Route::resource('etudiant', 'EtudiantController');
Route::post('etudiant/upload/{etudiant}', ['uses' => 'EtudiantController@upload', 'as' => 'etudiant.upload']);
Route::get('note/{etudiant}/{note}', ['uses' => 'NoteController@index', 'as' => 'note']);
Route::get('note/{etudiant}/{note}/edit', ['uses' => 'NoteController@index', 'as' => 'note.edit']);
Route::put('note/{note}', ['uses' => 'NoteController@update', 'as' => 'note.update']);
Route::post('note/{etudiant}', ['uses' => 'NoteController@store', 'as' => 'note.store']);
Route::delete('note/{note}', ['uses' => 'NoteController@destroy', 'as' => 'note.destroy']);
Route::auth();
Route::get('/', 'HomeController@index');

?>