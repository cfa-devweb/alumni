<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events',function ( Blueprint $table ) 
        {
            $table -> id();
            $table -> string('organizer');
            $table -> string('title');
            $table -> text('content');
            $table -> string('adress');
            $table -> string('city');
            $table -> time('start_time');
            $table -> time('end_time');
            $table -> date('event_date');
            $table -> date('end_event_date') -> nullable();
            $table -> boolean('visibility');
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
        Schema::dropIfExists('events');
    }
}
