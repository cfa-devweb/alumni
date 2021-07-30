<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table -> id();
            $table -> text('content');
            $table -> foreignId('from_member_id')
                -> references('id')
                -> on('members')
                -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
            $table -> foreignId('to_member_id')
                -> references('id')
                -> on('members')
                -> constrained()
                -> onDelete('cascade')
                -> onUpdate('cascade');
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
        Schema::dropIfExists('reports');
    }
}
