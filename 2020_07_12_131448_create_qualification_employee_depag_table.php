<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationEmployeeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_employee_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->unsigned();
            $table->string('kualifikasi');
            $table->string('jurusan_kualifikasi');
            $table->string('golongan');
            $table->date('tmt_golongan');
            $table->string('mapel_utama');
            $table->string('mapel_sertifikasi');
            $table->timestamps();
        });

        Schema::table('qualification_employee_depag', function (Blueprint $table){  
            $table->foreign('pageid')->references('pageid')->on('employee_depag')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualification_employee_depag');
    }
}
