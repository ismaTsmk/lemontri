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
        Schema::create('consign_profil_customer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("consign_id");
            $table->foreign('consign_id')->references('id')->on('consigns');
            $table->unsignedBigInteger("profil_customer_id");
            $table->foreign('profil_customer_id')->references('id')->on('profil_customers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consign_profil_customer', function (Blueprint $table) {
            //
        });
    }
};
