<?php

use Illuminate\Database\Seeder;
use App\Academic;

class Academictableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Academic::create(['year'=>'2020','startdate'=>'2020-06-5','enddate'=>'2021-03-15']);
        Academic::create(['year'=>'2021','startdate'=>'2021-06-5','enddate'=>'2022-03-15']);
        Academic::create(['year'=>'2022','startdate'=>'2022-06-5','enddate'=>'2023-03-15']);
    }
}
