<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            [
                'name' => 'NRC',
                'year' => '2005',
            ],
            [
                'name' => 'NRC',
                'year' => '2008',
            ],
            [
                'name' => 'DEVWEB',
                'year' => '2019',
            ],
        ]);
    }
}
