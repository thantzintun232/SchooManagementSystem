<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
     protected $fillable = [
      'user_id','phone','address','age'
    ];
        public function user(){
    	return $this->belongsTo('App\User');
    }

       public function timetable(){
    	return $this->hasMany('App\Timetable');
    }
}
