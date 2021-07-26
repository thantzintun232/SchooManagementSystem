<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
      'student_id','academic_id','class_id','status'
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
