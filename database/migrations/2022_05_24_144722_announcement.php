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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->constrained();
            $table->unsignedBigInteger('address_id');
                $table->foreign('address_id')->references('id')->on('addresses')->constrained();

            $table->string('company');
            $table->string('contact');
            $table->string('job');
            $table->string('type');

            $table->text('start');
            $table->text('body');
            $table->text('end');

            $table->string('temp');
            $table->timestamps();

            $table->softDeletes();
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
