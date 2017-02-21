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
use App\Event;
use App\EventImage;
use App\Description;

class EventsController extends Controller
{
    public function index($identifier, $type){
        $desc = Description::getByIdentifier($identifier); //po języku i url znajduje odpowiedni desc
        $events = $desc->events()->where('type', $type)->get();
        $view = view('admin.event.index', compact('events', 'identifier', 'type'));
        return Admin::view($view);
    }
    public function create($identifier, $type){
        $view = view('admin.event.create', compact('identifier', 'type'));
        return Admin::view($view);
    }
    
    public function store($identifier, $type, Request $request){
        $request->offsetSet('type', $type);
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'names' => 'required',
            'title' => 'required',
            'content' => 'required',
            'src' => 'required',
            'left_title' => 'required',
            'type' => ['regex:/^(wystawy|wydarzenia)/']
        ]);
        $request->file('src')->move(public_path('images/uploads'), $request->file('src')->getClientOriginalName());
        $request->offsetSet('description_id', Description::getByIdentifier($identifier)->id);
        
        $event = Event::create($request->all());
        $event->src = 'images/uploads/' . $request->file('src')->getClientOriginalName();
        $event->save();
        return redirect('admin/art/'. $identifier . '/events/'.$type);
    }
    
    public function edit($id){
        $event = Event::findOrFail($id);
        $view = view('admin.event.edit', compact('event'));
        return Admin::view($view);
    }
    
    public function update($id, Request $request){
        $event = Event::findOrFail($id);
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'names' => 'required',
            'title' => 'required',
            'content' => 'required',
            //'src' => 'required',
            'left_title' => 'required',
        ]);
        $event->update($request->all());
        
        if($request->file('src') != null){
            $request->file('src')->move(public_path('images/uploads'), $request->file('src')->getClientOriginalName());
            $event->src = 'images/uploads/' . $request->file('src')->getClientOriginalName();
            $event->save();
        }
        
        return redirect('admin/art/'.$event->description->identifier . '/events/'.$event->type);
    }
    public function delete($id){
        $event = Event::findOrFail($id);
        $identifier = $event->description->identifier;
        $type = $event->type;
        $event->delete();
        return redirect('admin/art/'. $identifier . '/events/'.$type);
    }
	
}
