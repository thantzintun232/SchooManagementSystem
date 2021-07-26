<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
      'name','grade_id'
    ];

       public function timetable(){
    	return $this->hasMany('App\Timetable');
    }

      public function grade(){
    	return $this->belongsTo('App\Grade');
    }
}
