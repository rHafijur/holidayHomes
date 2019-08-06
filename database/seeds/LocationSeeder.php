<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([ 'name'=>'Sajek' ]);
        Location::create([ 'name'=>"Cox's Bazer" ]);
        Location::create([ 'name'=>'Sundarban' ]);
        Location::create([ 'name'=>'Bandarban' ]);
        Location::create([ 'name'=>'Jaflong' ]);
        Location::create([ 'name'=>'Khagrachori' ]);
    }
}
