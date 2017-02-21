<?php


Route::get('/', function (){
    return view('index');
});

Route::auth();

