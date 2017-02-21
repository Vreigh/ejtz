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
use App\GaleryImage;


class GaleryImagesController extends Controller
{
    public function index()
    {   
        $images = GaleryImage::all();
        $view = view('admin.galeryImage.index', compact('images'));
        return Admin::view($view);      
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
                    'src' => 'required'
                ]); 
        $img = Image::make($request->file('src'));
        $img->save(public_path('img/'.$request->file('src')->getClientOriginalName()));
        $thumbnail = ImageHelper::getThumbnail($img, 400, 300);
        $thumbnail->save(public_path('img/thumbnail/'.$request->file('src')->getClientOriginalName()));
        
        $image = GaleryImage::create($request->all());
        $image->src = 'img/' . $request->file('src')->getClientOriginalName();
        $image->save();
        
        return redirect('admin/galery_images');
    }
      
    public function delete($img_id)
    {       
        $image = GaleryImage::findOrFail($img_id);
        $image->delete();
        
        return redirect('admin/galery_images');
    }
}
