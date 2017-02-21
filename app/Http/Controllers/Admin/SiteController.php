<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Welcome;
use App\News;
use App\Service;
use App\Portfolio;
use App\Project;
use App\Team;
use App\Contact;
use App\Settings;
use Mail;
use App;
use SleepingOwl\Admin\Admin;


class SiteController extends Controller
{
    public function getSite($identifier){
    	
	    $site = App\Site::getByIdentifier($identifier);
	    $view = view('admin.site.site', compact('site'));
	    return Admin::view($view);
    }
	
	
	public function postSite($identifier, Request $request){
            
                $this->validate($request, [
                    'content' => 'required',
                    'title' => 'required',
                ]);
		
		$site = App\Site::getByIdentifier($identifier);
		
		$site->update($request->all());
                
		$view = view('admin.site.site', compact('site'));
		return Admin::view($view);
	}
	
}
