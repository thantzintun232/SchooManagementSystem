<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
      'student_id','date','status'
    ];

     public function student(){
    	return $this->belongsTo('App\Student');
    }

    public function academic(){
    	return $this->belongsTo('App\Academic');
    }

    public function classroom(){
    	return $this->belongsTo('App\Classroom');
    }
}
