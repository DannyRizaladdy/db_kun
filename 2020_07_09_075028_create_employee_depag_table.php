<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->index()->unsigned();
            $table->integer('nuptk');
            $table->integer('nrg');
            $table->integer('npk');
            $table->integer('nip');
            $table->integer('nik');
            $table->string('nama');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('address');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('no_telp');
            $table->string('no_hp');
            $table->string('email');
            $table->string('sertifikasi');
            $table->integer('thn_sertifikasi');
            $table->string('status_pns');
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
        Schema::dropIfExists('employee_depag');
    }
}
