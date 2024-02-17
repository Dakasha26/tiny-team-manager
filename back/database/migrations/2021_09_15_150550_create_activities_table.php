<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->index();
            $table->foreign('member_id')->references('id')->on('members');
            $table->string('event_name', 150);
            $table->foreign('event_name')->references('id')->on('events');
            $table->boolean('isManager');
            $table->string('location', 150);
            $table->dateTime('dateTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
