<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Student;
use App\Teacher;


class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $t1= User::create([
        	'name'=>'Daw Sein',
        	'email'=>'dawsein@gmail.com',
        	'password'=>Hash::make('dawsein')
    	]);

       $teacher=Teacher::create([
            'user_id'=>$t1->id,
            'phone'=>'093123131',
            'address'=>'thingangyun,yangon',
            'age'=>'40'

       ]);

       $t1->assignRole('Teacher');

    	$s1=User::create([
        	'name'=>'Aye mg',
        	'email'=>'ayemg@gmail.com',
        	'password'=>Hash::make('ayemg')
    	]);

       

        $student=Student::create([
            'user_id'=>$s1->id,
            'dob'=>'1998-03-23',
            'nrc'=>'3/amz(n)999999',
            'fathername'=>'U Hla Win',
            'mothername'=>'Daw Aye Mg',
            'address'=>'haling,yangon',
            'phone'=>'09-87654332'
        ]);

    	$s1->assignRole('Student');
    }
}
