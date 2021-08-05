<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            ApprenticeSeeder::class,
            PromotionSeeder::class,
            MemberSeeder::class,
            MemberPromotionSeeder::class,
            CategorySeeder::class,
            //PostSeeder::class,
            EventSeeder::class,
            ConversationSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
  


