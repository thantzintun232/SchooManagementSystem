<?php

use Illuminate\Database\Seeder;
use App\Classroom;

class Classroomtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::create(['name'=>'10A','grade_id'=>'1']);
        Classroom::create(['name'=>'10B','grade_id'=>'1']);
        Classroom::create(['name'=>'10C','grade_id'=>'1']);
        Classroom::create(['name'=>'10D','grade_id'=>'1']);
    }
}
