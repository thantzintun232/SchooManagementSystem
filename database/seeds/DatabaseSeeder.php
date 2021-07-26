<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Academictableseeder::class);
        $this->call(Gradetableseeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(Classroomtableseeder::class);
        $this->call(Roletableseeder::class);
        $this->call(Usertableseeder::class);
        $this->call(Recordtableseeder::class);
       
    }
}
