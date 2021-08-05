<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprenticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apprentices')->insert([
            [
                'first_name' => 'Jonathan',
                'last_name' => 'Delefortrie',
                'birth_date' => '1986-09-16',
            ],
        ]); 
    }
}
