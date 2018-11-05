<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('alias');
            $table->String('name');
            $table->String('lastname');
            $table->integer('age');
            $table->enum('sex', ['male', 'female'])->default('male');
            $table->String('class');
            $table->String('nationality');
            $table->String('store');
            $table->String('photos');
            $table->String('consultants');
            $table->String('modality');
            $table->String('description');
            

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
        Schema::dropIfExists('interventions');
    }
}
