<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 40);
            $table->string('secondName', 40);
            $table->string('patronymicName', 40)->nullable();
            $table->string('educationPlace', 100)->nullable();
            $table->string('department', 100)->nullable();
            $table->string('studyGroup', 10)->nullable();
            $table->integer('documents_package_id')->unsigned()->index();
            $table->foreign('documents_package_id')->references('id')->on('documents_packages');
            $table->string('position_name', 30)->nullable();
            $table->foreign('position_name')->references('id')->on('positions');
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
