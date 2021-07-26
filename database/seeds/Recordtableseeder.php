<?php

use Illuminate\Database\Seeder;
use App\Classroom;
use App\Student;
use App\Academic;
use App\Record;

class Recordtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create(['student_id'=>'1','academic_id'=>'1','class_id'=>'2']);
    }
}
