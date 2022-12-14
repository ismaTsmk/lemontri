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
        Schema::create('consigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cycle_id')->nullable();
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->string("title");
            $table->text("image1");
            $table->string("text1");
            $table->text("image2")->nullable();
            $table->string("text2")->nullable();
            $table->string("interdits");
            $table->text("pdf")->nullable();
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
        Schema::dropIfExists('consigns');
    }
};
