<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Announcement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->constrained();
            $table->string('name');
            $table->string('street');
            $table->string('postcode');
            $table->string('country');
            $table->string('job');
            $table->date('start');
            $table->string('contact');
            $table->string('type');
            $table->string('body');
            $table->string('end');
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
        //
    }
}
