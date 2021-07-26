<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
      'name','grade_id'
    ];


    public function grade(){
    	return $this->belongsTo('App\Grade');
    }

    public function timetable(){
    	return $this->hasMany('App\Timetable');
    }


       public function record(){
    	return $this->hasMany('App\Record');
    }
}
