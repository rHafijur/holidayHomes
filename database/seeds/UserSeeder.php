<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Vendor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Farabi',
            'email'=>'farabi@site.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>1,
        ]);
        $user= User::create([
            'name'=>'Nasim',
            'email'=>'nasim@site.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>2,
        ]);
        $user->vendor()->save(
            new Vendor([
                'company'=>"Fellow Programers",
                'phone'=>"017*********",
                'address'=>"KaZi para, Dhaka",
            ])
        );
        User::create([
            'name'=>'hafiz',
            'email'=>'hafiz@site.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>3,
        ]);
    }
}
