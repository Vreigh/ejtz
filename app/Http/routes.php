<?php


Route::get('/',                  'HomeController@getSubjects');
Route::get('tasks/{id}',        'TaskController@getBySubject');

Route::auth();

