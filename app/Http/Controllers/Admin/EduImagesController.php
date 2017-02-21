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
use App\EduProject;
use App\EduImage;
use App\Description;
use App\ImageHelper;
use Image;


class EduImagesController extends Controller
{
    public function index($project_id)
    {
        $project = EduProject::findOrFail($project_id);
        $eduImages = $project->images;
        
        $view = view('admin.eduImage.index', compact('eduImages', 'project_id'));
        return Admin::view($view);      
    }
    
    public function store($project_id, Request $request)
    {
        $project = EduProject::findOrFail($project_id); //validacja czy istnieje
        $this->validate($request, [
                    'src' => 'required'
                ]); 
        $img = Image::make($request->file('src'));
        $img->save(public_path('img/'.$request->file('src')->getClientOriginalName()));
        $thumbnail = ImageHelper::getThumbnail($img, 400, 300);
        $thumbnail->save(public_path('img/thumbnail/'.$request->file('src')->getClientOriginalName()));
        
        $request->offsetSet('edu_project_id', $project_id);
        $image = EduImage::create($request->all());
        $image->src = 'img/' . $request->file('src')->getClientOriginalName();
        
        $image->save();
        
        return redirect('admin/education/'.$project_id);
    }
      
    public function delete($img_id)
    {       
        $image = EduImage::findOrFail($img_id);
        $project_id = $image->edu_project_id;
        $image->delete();
        
        return redirect('admin/education/'.$project_id);
    }
}
