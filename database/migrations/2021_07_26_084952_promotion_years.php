<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromotionYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_years', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id') ->constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table->foreignId('promotion_id') ->constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion_year');
    }
}
