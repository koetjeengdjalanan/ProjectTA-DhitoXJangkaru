<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->text('cityadd')->nullable();
            $table->text('provadd')->nullable();
            $table->text('countryadd')->nullable();
            $table->integer('postal')->nullable();
            $table->bigInteger('phone')->nullable();
            // $table->foreignId('major')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};
