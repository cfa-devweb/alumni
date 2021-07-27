<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                -> constrained()
                -> onUpdate('cascade')
                -> onDelete('cascade');
            $table-> string('last_name');
            $table -> string('first_name');
            $table -> tinyText('avatar');
            $table -> foreignId('promotion_year_id')
                -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> tinyText('cv') -> nullable();
            $table -> text('description') -> nullable();
            $table -> string('business') -> nullable();
            $table -> string('country') -> nullable();
            $table -> string('city') -> nullable();
            $table -> boolean('worker') -> nullable();
            $table -> boolean('certificate') -> nullable();
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
