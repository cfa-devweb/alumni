<?php

namespace Database\Seeders;

use App\Models\Blog_post;
use App\Models\Categorie;
use App\Models\Cci;
use App\Models\Event;
use App\Models\Group;
use App\Models\InscriptionEvent;
use App\Models\Member;
use App\Models\MemberPromotion;
use App\Models\Message;
use App\Models\Promotion;
use App\Models\Promotion_year;
use App\Models\Reports;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cci::factory(10)                -> create();
        \App\Models\User::factory(10)   -> create();
        Promotion::factory(10)          -> create();
        Promotion_year::factory(10)     -> create();
        Group::factory(10)              -> create();
        Event::factory(10)              -> create();    
        Member::factory(10)             -> create();
        Message::factory(10)            -> create();
        Reports::factory(10)            -> create();
        MemberPromotion::factory(10)    -> create();
        InscriptionEvent::factory(10)   -> create();
        Blog_post::factory(10)          -> create();
      // créer un user par défault pour dev
      //DB::table('users') -> insert([
        //'name'              => 'admin',
        //'email'             => 'admin@admin.com',
        //'email_verified_at' => now(),
        //'password'          => Hash::make('admin'), // password
        //'remember_token'    => Str::random(10),
      //]); 
    }
}
  

