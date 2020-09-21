<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->decimal('price')->unsigned()->index();
            $table->tinyInteger('bedrooms')->unsigned()->index();
            $table->tinyInteger('bathrooms')->unsigned()->index();
            $table->tinyInteger('storeys')->unsigned()->index();
            $table->tinyInteger('garages')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
