<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            [
                'promotion_id' => '3'
            ],
            [
                'promotion_id' => '1'
            ],
            [
                'promotion_id' => '2'
            ],
        ]); 
    }
}
