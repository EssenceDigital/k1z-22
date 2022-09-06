<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $password = config('app.auth_pass');
         \DB::table('users')->insert([
           'name' => 'admin',
           'email' => 'contact@k1zautosales.ca',
           'email_verified_at' => now(),
           'password' => bcrypt($password), // password
           'created_at' => now()

         ]);
    }
}
