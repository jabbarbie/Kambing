<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('unit', function (Blueprint $table) {
          $table->increments('id_unit');
          $table->string('tertanggung',35);
          $table->string('nopol',11);
          $table->string('norangka',25);
          $table->string('nomesin',20);
          $table->string('nomodel',20);
          $table->string('warna',15);
          $table->string('merk',20);
          $table->string('jenis',30);
          $table->Integer('tahun');
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
        Schema::drop('unit');
    }
}
