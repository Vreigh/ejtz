<?php

/**
 * Dashboard
 */
Admin::menu()->url('/')->label('Dashboard')->icon('fa-dashboard'); //done


/**
 * O nas
 */
/*Admin::menu()->label('O nas')->icon('fa-home')->items(function ()
{
	Admin::menu()->url('site/idea')->label('Idea')->icon('fa-exclamation'); //done
        Admin::menu()->url('site/usmenu')->label('menu')->icon('fa-user'); //done
	Admin::menu('App\Contact')->label('Kontakt')->icon('fa-phone');  //done ,
	Admin::menu()->url('site/informations')->label('Dane fundacji')->icon('fa-info'); //done
	Admin::menu('App\Document')->label('Dokumenty')->icon('fa-file'); // FILIP-TO-DO
	Admin::menu()->url('galery_images')->label('Kafelki galerii')->icon('fa-file-image-o'); //FILIP-TO-DO
    Admin::menu()->url('constants/address')->label('Dane adresowe')->icon('fa-file-image-o'); //FILIP-TO-DO
       // Admin::menu('App\PressLink')->label('Prasa - napisali o nas')->icon('fa fa-external-link'); //FILIP-TO-DO
	//Admin::menu()->url('site/description')->label('Opis działalności na dole')->icon('fa-file-text'); //done
	Admin::menu()->url('site/support')->label('Wspomóż fundację')->icon('fa-usd'); //done
    //Admin::menu()->url('link')->label('Linki do wsparcia')->icon('fa fa-external-link'); //done

	
});*/


/**
 * Administrators
 */
Admin::menu('App\Administrators')->label('Administrators')->icon('fa-users'); //done


