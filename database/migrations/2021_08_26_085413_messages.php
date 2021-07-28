<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table -> id();
            $table -> text('content');
            $table -> foreignId('from_member_id') 
                -> references('id')
                -> on('members')
                -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> integer('to_id');
            $table -> string('type_message');
            $table -> boolean('visibility');
            $table->index('to_id') 
                ->constrained()
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
        Schema::dropIfExists('messages');
    }
}
