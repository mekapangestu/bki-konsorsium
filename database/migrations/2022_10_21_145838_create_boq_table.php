<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boq', function (Blueprint $table) {
            $table->bigIncrements('boq_id');
            $table->unsignedBigInteger('spk_id');
            $table->string('boq_no');
            $table->timestamps();

            $table->foreign('spk_id')->references('spk_id')->on('spk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boq');
    }
}
