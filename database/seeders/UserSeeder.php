<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            [
                'name'  => 'Belmont',
                'email' => 'belmont@belmont.com',
                'password' => Hash::make('belmontbelmont'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'  => 'Dupont',
                'email' => 'dupont@dupont.com',
                'password' => Hash::make('dupontdupont'),
                'remember_token'    => Str::random(10),
            ], 
        ]);
    }  
}
