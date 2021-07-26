<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{      


  protected $fillable = [
   'academic_id','subject_id','teacher_id','classroom_id','day','starttime','endtime'
 ];
 public function teacher(){
   return $this->belongsTo('App\Teacher');
 }
 public function subject(){
   return $this->belongsTo('App\Subject');
 }
 public function academic(){
   return $this->belongsTo('App\Academic');
 }
 public function classroom(){
   return $this->belongsTo('App\Classroom');
 }
}
