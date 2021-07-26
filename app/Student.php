<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
      'user_id','dob','nrc','fathername','mothername','address','phone'
    ];


      public function user(){
    	return $this->belongsTo('App\User');
    }

        public function records(){
    	return $this->hasMany('App\Record');
    }
}
