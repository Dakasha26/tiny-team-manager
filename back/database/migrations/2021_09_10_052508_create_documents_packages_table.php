<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('hasReestr');
            $table->boolean('hasApplication');
            $table->boolean('hasAgreement');
            $table->boolean('hasPassportScan');
            $table->boolean('hasSnilsScan');
            $table->boolean('hasPolisScan');
            $table->boolean('hasInnScan');
            $table->boolean('hasPripisnoeScan');
            $table->boolean('hasEducationReference');
            $table->boolean('hasPhoto');
            $table->boolean('hasFee');
            $table->boolean('hasResult');
            $table->string('comment', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_packages');
    }
}
