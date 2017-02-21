<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Orderable\Orderable;
use App\Helpers\Translatable\Translatable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Carbon\Carbon;   
use Nicolaslopezj\Searchable\SearchableTrait;

class Article extends Model implements SluggableInterface
{
    use Orderable;
    use Translatable;
    use SluggableTrait;
    use SearchableTrait;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'link',
    ];
    
    protected $fillable = ['photo','seo_tags','additional_photo', 'video', 'title', 'additional_title', 'text', 'sneakpeak'];
     
    protected $translatable = ['title', 'additional_title', 'text', 'sneakpeak'];  
    
    public function tags()
    {
           return $this->belongsToMany('App\Tag');
    }       
    
    
    public static function getByYears(){
  
        return self::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y');
        });
        
    }
}
