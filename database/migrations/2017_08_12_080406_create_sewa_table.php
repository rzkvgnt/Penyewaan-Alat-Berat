<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id_sewa');
            $table->text('nama_sewa');
            $table->date('tanggal_sewa');
            $table->date('batas_sewa');
            $table->text('alamat_sewa');
            $table->text('no_sewa');
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
        Schema::dropIfExists('sewa');
    }
}
