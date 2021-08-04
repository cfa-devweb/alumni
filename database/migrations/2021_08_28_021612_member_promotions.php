<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MemberPromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_promotions', function(Blueprint $table){
            $table -> id();
            $table -> foreignId('member_id')
                -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> foreignId('promotions_id')
                -> constrained()
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
        Schema::dropIfExists('member_promotions');
    }
}
