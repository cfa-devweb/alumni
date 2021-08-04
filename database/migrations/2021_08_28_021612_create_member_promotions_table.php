<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_promotions', function(Blueprint $table){
            $table->id();
            $table->timestamps();

            $table->foreignId('member_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('promotion_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
