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
use App\ImageHelper;
use App\Settings;
use Mail;
use App;
use SleepingOwl\Admin\Admin;
use App\Event;
use App\EventImage;
use App\Description;
use Image;


class EventImagesController extends Controller
{
    public function index($event_id)
    {   
        $event = Event::findOrFail($event_id);
        $eventImages = $event->images;
        
        $view = view('admin.eventImage.index', compact('eventImages', 'event'));
        return Admin::view($view);      
    }
    
    public function store($event_id, Request $request)
    {
        $event = Event::findOrFail($event_id); //validacja czy istnieje
        $this->validate($request, [
                    'src' => 'required'
                ]); 
        //$request->file('src')->move(public_path('images/uploads'), $request->file('src')->getClientOriginalName());
        $img = Image::make($request->file('src'));
        $img->save(public_path('img/'.$request->file('src')->getClientOriginalName()));
        $thumbnail = ImageHelper::getThumbnail($img, 400, 300);
        $thumbnail->save(public_path('img/thumbnail/'.$request->file('src')->getClientOriginalName()));
        
        $request->offsetSet('event_id', $event_id);
        $image = EventImage::create($request->all());
        $image->src = 'img/' . $request->file('src')->getClientOriginalName();
        $image->save();
        
        return redirect('admin/art/event/'.$event_id.'/images');
    }
      
    public function delete($img_id)
    {       
        $image = EventImage::findOrFail($img_id);
        $event_id = $image->event->id;
        $image->delete();
        
        return redirect('admin/art/event/'.$event_id.'/images');
    }
}
