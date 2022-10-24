<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spk', function (Blueprint $table) {
            $table->bigIncrements('spk_id');
            $table->String('area');
            $table->String('location');
            $table->String('description');
            $table->String('spk_no');
            $table->String('so_no');
            $table->String('sos');
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
        Schema::dropIfExists('spk');
    }
}
