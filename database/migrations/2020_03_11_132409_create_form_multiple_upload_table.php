<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormMultipleUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_multiple_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumInteger('UserId');
            $table->string('titel');
            $table->string('omschrijving');
            $table->string('categorie');
            $table->string('leeftijdverificatie');
            $table->string('filename');
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
        Schema::dropIfExists('form_multiple_upload');
    }
}