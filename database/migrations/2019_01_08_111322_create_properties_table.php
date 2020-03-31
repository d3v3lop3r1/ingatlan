<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agent_id')->nullable();
            $table->unsignedInteger('client_id')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('kiemelt')->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->tinyInteger('list_type')->nullable();
            $table->tinyInteger('subtype')->nullable();
            $table->string('header_hun')->nullable();
            $table->string('header_de')->nullable();
            $table->string('header_en')->nullable();
            $table->text('text_hun')->nullable();
            $table->text('text_de')->nullable();
            $table->text('text_en')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('region')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->integer('price')->nullable();
            $table->integer('min_price')->nullable();
            $table->integer('act_price')->nullable();
            $table->integer('deposit')->nullable();
            $table->tinyInteger('attraktivitas')->nullable();
            $table->tinyInteger('allapot')->nullable();
            $table->tinyInteger('extrak')->nullable();
            $table->tinyInteger('floors')->nullable();
            $table->tinyInteger('room_no')->nullable();
            $table->tinyInteger('halfroom_no')->nullable();
            $table->integer('area')->nullable();
            $table->integer('land_area')->nullable();
            $table->tinyInteger('condition')->nullable();
            $table->tinyInteger('heating')->nullable();
            $table->tinyInteger('ad_type')->nullable();
            $table->tinyInteger('parking')->nullable();
            $table->tinyInteger('comfort')->nullable();
            $table->tinyInteger('room_height')->nullable();
            $table->tinyInteger('bathroom_no')->nullable();
            $table->tinyInteger('toilet_no')->nullable();
            $table->boolean('lift')->nullable();
            $table->boolean('balcony')->nullable();
            $table->boolean('terrace')->nullable();
            $table->boolean('aircondition')->nullable();
            $table->boolean('disabled')->nullable();
            $table->boolean('garden')->nullable();
            $table->string('google_address')->nullable();
            $table->float('map_lat',6,4)->nullable();
            $table->float('map_long',6,4)->nullable();
            $table->string('photo_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
