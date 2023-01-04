<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Admin
      // User::truncate();
       User::create([ 'full_name' => 'david admin',
       'username' => 'Admin',
       'email' =>   'admin@gmail.com',
       'password' => Hash::make('111'),
       'role' => 'admin',
       'status' => 'active'
    ]);

         //Vendor
         User::create([
        'full_name' => 'chima vendor',
        'username' => 'Vendor',
        'email' =>   'vendor@gmail.com',
        'password' => Hash::make('111'),
        'role' => 'vendor',
        'status' => 'active'
         ]);

        //Customer
        User::create([
        'full_name' => 'chike customer',
        'username' => 'Customer',
        'email' =>   'customer@gmail.com',
        'password' => Hash::make('111'),
        'role' => 'customer',
        'status' => 'active'
       ]);
    }
}
