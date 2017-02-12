<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/', 'TweetController@index');
