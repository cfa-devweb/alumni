<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InscriptionEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription_events', function(Blueprint $table){
            $table -> id();
            $table -> foreignId('event_id') -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> foreignId('member_id') -> constrained()
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
        Schema::dropIfExists('inscription_events');
    }
}
