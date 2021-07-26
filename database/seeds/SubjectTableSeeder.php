<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['name'=>'Myanmar','grade_id'=>'1']);
        Subject::create(['name'=>'English','grade_id'=>'1']);
        Subject::create(['name'=>'Math','grade_id'=>'1']);
        Subject::create(['name'=>'Physics','grade_id'=>'1']);
        Subject::create(['name'=>'Chemistry','grade_id'=>'1']);
        Subject::create(['name'=>'Biology','grade_id'=>'1']);
    }
}
