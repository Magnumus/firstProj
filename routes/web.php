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
Route::get('/', 'NotesController@index');
Route::get('/show/{note}', 'NotesController@showOne');

/*
Route::get('/', function () {
    //$notes = DB::table("notes")->get();
    //$notes = App\Note::all();
    $notes = App\Note::incomplete();
    return view('welcome', compact('notes'));
});

Route::get('/show/{note}', function($id) {
    //$note = DB::table("notes")->find($id);
    $note = App\Note::find($id);
    return view('show', compact('note'));
});
*/
