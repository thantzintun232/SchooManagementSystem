<?php

use Illuminate\Database\Seeder;

class Teachertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create(['user_id'=>'1']);
    }
}
