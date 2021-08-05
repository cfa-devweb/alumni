<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'type' => 'admin',
                'email' => 'admin@alumni.nc',
                'password' => Hash::make('alumni'),
                'email_verified_at' => now(),
            ],
            [
                'type' => 'member',
                'email' => 'marie@alumni.nc',
                'password' => Hash::make('alumni'),
                'email_verified_at' => now(),
            ],
            [
                'type' => 'member',
                'email' => 'guillaume@alumni.nc',
                'password' => Hash::make('alumni'),
                'email_verified_at' => now(),
            ],
        ]); 
    }
}
