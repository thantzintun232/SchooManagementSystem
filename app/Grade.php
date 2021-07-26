<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
     protected $fillable = [
      'name'
    ];

    public function academics(){
   			return $this->belongsToMany('App\Academic','academicsgrades','academic_id','grade_id')
   			->withTimestamps();
   		}
}
