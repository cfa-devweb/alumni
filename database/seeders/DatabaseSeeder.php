<?php

namespace Database\Seeders;

use App\Models\Cci;
use App\Models\Event;
use App\Models\Member;
use App\Models\Message;
use App\Models\Reports;
use App\Models\Post;
use App\Models\Category;
use App\Models\Conversation;
use App\Models\Promotion;
use Illuminate\Support\Str;
use App\Models\MemberPromotion;
use Illuminate\Database\Seeder;
use App\Models\InscriptionEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            PromotionsSeeder::class,
        ]);

        Cci::factory(10)                -> create();
        \App\Models\User::factory(10)   -> create();
        Promotion::factory(10)          -> create();
        Event::factory(10)              -> create();
        Category::factory(10)          -> create();
        Member::factory(10)             -> create();
        Conversation::factory(10)       -> create();
        Message::factory(30)            -> create();
        Reports::factory(10)            -> create();
        MemberPromotion::factory(10)    -> create();
        InscriptionEvent::factory(10)   -> create();
        Post::factory(10)               -> create();

        DB::table('users') -> insert(
        [
            'name'              => 'admin',
            'email'             => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin'), // password
            'remember_token'    => Str::random(10),
        ]); 
    }
}
  


