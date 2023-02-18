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
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('vawcharno');
            $table->string('boarding');
            $table->string('nirman');
            $table->string('beton');
            $table->string('asbab');
            $table->string('jogajog');
            $table->string('chapa');
            $table->string('currentnet');
            $table->string('exam');
            $table->string('guest');
            $table->string('bibidh');
            $table->string('loan');
            $table->string('khorakhi');
            $table->string('basicneed');
            $table->string('lillahkorjo');
            $table->string('vortiexam');
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
        Schema::dropIfExists('costs');
    }
};
