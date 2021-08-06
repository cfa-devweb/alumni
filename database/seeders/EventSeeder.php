<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('events')->insert([
            [
                'title' => 'first event',
                'content' => 'it\'s the first event !!!!!!!!!!!!!!!!!!!!!!!!!',
                'address' => '14 rue de verdun',
                'start_at' => '12-08-21',
                'end_at' => '12-08-21',
            ],
            [   
                'title' => 'second event',
                'content' => 'it\'s the second event !!!!!!!!!!!!!!!!!!!!!!!!!',
                'address' => '14 rue de verdun',
                'start_at' => '13-08-21',
                'end_at' => '13-08-21',
            ],
            [
                'title' => 'third event',
                'content' => 'it\'s the third event !!!!!!!!!!!!!!!!!!!!!!!!!',
                'address' => '14 rue de verdun',
                'start_at' => '15-08-21',
                'end_at' => '15-08-21',
            ],
        ]);


    }
}
