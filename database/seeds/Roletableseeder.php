<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;



class Roletableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Staff']);
        Role::create(['name'=>'Teacher']);
        Role::create(['name'=>'Student']);
    }
}
