<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'content' => 'Je suis charlie',
                'conversation_id' => '1',
                'member_id' => '1'
            ],
            [
                'content' => 'Je suis quelquun',
                'conversation_id' => '1',
                'member_id' => '1'
            ],
            [
                'content' => 'Je suis charlie',
                'conversation_id' => '3',
                'member_id' => '1'
            ],
            [
                'content' => 'Je suis charlie',
                'conversation_id' => '2',
                'member_id' => '1'
            ],
        ]); 
    }
}
