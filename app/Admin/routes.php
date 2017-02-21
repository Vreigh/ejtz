<?php

Route::get('', [
	'as' => 'admin.home',
	function ()
	{
		$content = 'Mail kontaktowy do administratora: raszka.luk@gmail.com';
		return Admin::view($content, 'Dashboard');
	}
]);
define('APP_ROOT', '\\App\\Http\\Controllers\\Admin\\');

Route::group(['middleware' => ['web']], function () {
    	
	Route::get('site/{identifier}', APP_ROOT . 'SiteController@getSite');
	Route::post('site/{identifier}', APP_ROOT . 'SiteController@postSite');
	        
        ///////////////////////////
        Route::get('art/{identifier}', APP_ROOT . 'DescriptionController@getDescription');
        Route::post('art/{identifier}', APP_ROOT . 'DescriptionController@postDescription');
        
        Route::get('art/{identifier}/events/{type}', APP_ROOT . 'EventsController@index');
        Route::get('art/{identifier}/events/create/{type}', APP_ROOT . 'EventsController@create');
        Route::post('art/{identifier}/events/create/{type}', APP_ROOT . 'EventsController@store');
        Route::get('art/event/{id}', APP_ROOT . 'EventsController@edit');
        Route::post('art/event/{id}', APP_ROOT . 'EventsController@update');
        Route::get('art/event/{id}/delete', APP_ROOT . 'EventsController@delete');
        //////////////////////////
	
	Route::get('art/event/{id}/images', APP_ROOT . 'EventImagesController@index');
	Route::post('art/event/{id}/images/create', APP_ROOT . 'EventImagesController@store');
        Route::get('art/image/{id}/delete', APP_ROOT . 'EventImagesController@delete');
        
    Route::get('galery_images', APP_ROOT . 'GaleryImagesController@index');
    Route::post('galery_images/create', APP_ROOT . 'GaleryImagesController@store');
    Route::get('galery_images/{img_id}/delete', APP_ROOT . 'GaleryImagesController@delete');
    Route::get('galery_images/{img_id}/edit', APP_ROOT . 'GaleryImagesController@edit');
    Route::post('galery_images/{img_id}/edit', APP_ROOT . 'GaleryImagesController@update');
        
        Route::get('education/{id}',       APP_ROOT .'EduImagesController@index');
        Route::post('education/{id}/create',    APP_ROOT .'EduImagesController@store');
        Route::get('education/image/{id}/delete',    APP_ROOT .'EduImagesController@delete');

    Route::get('link',    APP_ROOT .'ConstantsController@getLink');
   // Route::get('linkudes',    APP_ROOT .'ConstantsController@getLinkudes');
    Route::post('link',    APP_ROOT .'ConstantsController@postLink');

    Route::get('constants/{name}', APP_ROOT .'ConstantsController@getCk');
    Route::post('constants/{name}', APP_ROOT .'ConstantsController@postCk');
});


