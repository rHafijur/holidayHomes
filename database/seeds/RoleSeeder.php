<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ 'title'=> 'Admin']);
        Role::create([ 'title'=> 'Vendor']);
        Role::create([ 'title'=> 'Tourist']);
    }
}
