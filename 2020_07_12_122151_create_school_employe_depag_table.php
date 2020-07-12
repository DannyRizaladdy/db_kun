<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolEmployeDepagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_employe_depag', function (Blueprint $table) {
            $table->id();
            $table->integer('pageid')->unsigned();
            $table->integer('nsm');
            $table->enum('jenjang',['MI','MTS','RA']);
            $table->string('madrasah');
            $table->enum('status_madrasah',['Swasta','Negeri']);
            $table->string('kecamatan_madrasah');
            $table->string('kabupaten_madrasah');
            $table->timestamps();
        });

        Schema::table('school_employe_depag', function (Blueprint $table){  
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
        Schema::dropIfExists('school_employe_depag');
    }
}
