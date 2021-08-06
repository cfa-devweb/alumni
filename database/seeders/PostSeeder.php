<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Hello world !',
                'promoted' => 1,
                'visible' => 1,
                'content' => 'Automatic context help is disabled. Use the toolbar to manually get help for the current caret position or to toggle automatic help.',
                'user_id' => 1,
                'category_id' => 1,
            ],
        ]);
    }
}
