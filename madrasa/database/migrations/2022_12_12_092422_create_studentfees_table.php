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
        Schema::create('studentfees', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('studentname');
            $table->string('mobile');
            $table->string('class');
            $table->string('formno');
            $table->string('fathername');
            $table->string('jamat');
            $table->string('address');
            $table->string('district'); 
            $table->string('formfee'); 
            $table->string('masikbeton'); 
            $table->string('idcardfee'); 
            $table->string('resulltcardfee');
            $table->string('monthlykhoraki');
            $table->string('residentialfee');
            $table->string('nonresidentialfee'); 
            $table->string('boardregistrationfee'); 
            $table->string('examfee'); 
            $table->string('sanadfee'); 
            $table->string('protoyonfee'); 
            $table->string('moallimafee'); 
            $table->string('currentbill'); 
            $table->string('boyeka'); 
            $table->string('bibidh'); 
            $table->string('total');  
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('studentfees');
    }
};
