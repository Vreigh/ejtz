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



