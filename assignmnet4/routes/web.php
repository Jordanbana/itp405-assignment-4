<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/', 'TweetController@index');


Route::post('/', 'TweetController@store');

Route::get('/tweets/{id}', 'TweetController@view');

Route::get('/tweets/{id}/delete', 'TweetController@destroy');
