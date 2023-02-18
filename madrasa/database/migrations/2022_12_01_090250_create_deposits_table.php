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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('name');
            $table->string('occupation');
            $table->string('mobile');
            $table->string('address');
            $table->string('patano');
            $table->string('khoraki'); 
            $table->string('dan'); 
            $table->string('vortifee'); 
            $table->string('masikcada'); 
            $table->string('baridokan');
            $table->string('examfee');
            $table->string('generalfee');
            $table->string('jakat'); 
            $table->string('lillahfee');  
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
        Schema::dropIfExists('deposits');
    }
};
