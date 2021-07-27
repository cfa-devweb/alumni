<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table )
        {
            $table -> id();
            $table -> foreignId('member_id') -> constrained()
                -> onDelete('cascade')
                ->onUpdate('cascade');
            $table -> string('title');
            $table -> text('content');
            $table -> foreignId('categorie_id') -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
