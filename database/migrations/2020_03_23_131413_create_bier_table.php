<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bier', function (Blueprint $table) {
            $table->string('naam')->unique();
            $table->string('merk');
            $table->decimal('alcoholpercentage');
            $table->integer('kleur_EBC');
            $table->integer('bitter_EBU');
            $table->string('biersoort')->references('naam')->on('biersoort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bier');
    }
}
