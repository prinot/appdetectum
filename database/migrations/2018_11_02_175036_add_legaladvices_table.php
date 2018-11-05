<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLegaladvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legaladvices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('intervention_code');
            $table->string('process_type');
            $table->String('city');
            $table->String('denounced');
            $table->integer('dni');
            $table->enum('sex', ['male', 'female'])->default('male');
            $table->dateTime('datatime');
            $table->string('for_legal');
            $table->string('police_headquarters');
            $table->string('rode');
            $table->string('courthouse_peace');
            $table->string('prosecution');
            $table->string('superior_prosecution');
            $table->string('criminal_court');
            $table->string('civil_repair');
            $table->string('rc_status');
            $table->string('situation');
            

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
        Schema::dropIfExists('legaladvices');
    }
}
