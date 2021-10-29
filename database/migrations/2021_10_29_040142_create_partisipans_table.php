<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartisipansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partisipans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kpp_id');
            $table->string('nama');
            $table->string('email')->nullable();
            $table->tinyInteger('jenis_kelamin')->default(1);
            $table->timestamps();

            $table->foreign('kpp_id')->references('id')->on('kpps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partisipans');
    }
}
