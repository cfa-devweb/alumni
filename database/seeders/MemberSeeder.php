<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'last_name' => 'Tioni',
                'first_name' => 'oriane',
                'birth_date' => '1993-06-03',
                'resume' => 'bonjourrrr',
                'description' =>'Facilis et inventore expedita aut optio sunt sit. Id dignissimos quia ea et harum dolorem voluptate. Modi voluptatum necessitatibus assumenda consequatur ut sit.',
                'employer' => 'Eramet',
                'country' => 'Nouvelle-zélande',
                'city' => 'Auckland',
                'user_id'=> 2 ,

            ],
            [
                'last_name' => 'Walles',
                'first_name' => 'Julien',
                'birth_date' => '1992-07-08',
                'resume' => 'bondia',
                'description' =>' expedita aut optio sunt sit. Id dignissimos quia ea et harum dolorem voluptate. Modi voluptatum necessitatibus assumenda consequatur ut sit.',
                'employer' => 'Vale',
                'country' => 'Nouvelle-zcaledonie',
                'city' => 'Paita',
                'user_id'=> 3 ,
            ],
           
        ]); 
    }
}
