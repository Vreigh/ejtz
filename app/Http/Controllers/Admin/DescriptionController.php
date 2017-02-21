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


class DescriptionController extends Controller
{
    public function getDescription($identifier){
    	
	    $description = App\Description::getByIdentifier($identifier);
	    $view = view('admin.site.description', compact('description'));
	    return Admin::view($view);
    }
	
	
    public function postDescription($identifier, Request $request){

            $this->validate($request, [
                'content' => 'required',
                'title' => 'required',
                'con_title' => 'required',
                'address' => 'required',
                'mail' => 'required|email',
                'phone' => 'required',
                'open_hours' => 'required',
            ]);

            $description = App\Description::getByIdentifier($identifier);

            $description->update($request->all());

            $view = view('admin.site.description', compact('description'));
            return Admin::view($view);
    }
    
	
}
