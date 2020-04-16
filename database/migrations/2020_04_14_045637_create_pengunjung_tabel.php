<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Membuat table dalam database
        Schema::create('pengunjung_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Umur');
            $table->string('Alamat');
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunjung_tabel');
    }
}
