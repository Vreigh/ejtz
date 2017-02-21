<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Administrator extends Model
{
    	public function setPasswordAttribute($value)
 	{
 		if ( ! empty($value))
 		{
 			$this->attributes['password'] = Hash::make($value);
 		}
 	}
}
