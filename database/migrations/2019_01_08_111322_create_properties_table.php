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
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('agent_id')->nullable();
            $table->tinyInteger('list_type')->nullable();
            $table->tinyInteger('ad_type')->nullable();
            $table->string('subtype')->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->string('header')->nullable();
            $table->text('text')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->integer('price')->nullable();
            $table->integer('min_price')->nullable();
            $table->string('deposit')->nullable();
            $table->tinyInteger('room_no')->nullable();
            $table->tinyInteger('halfroom_no')->nullable();
            $table->integer('area')->nullable();
            $table->string('condition')->nullable();
            $table->string('heating')->nullable();
            $table->string('look')->nullable();
            $table->string('orientation')->nullable();
            $table->string('parking')->nullable();
            $table->string('comfort')->nullable();
            $table->string('attic')->nullable();
            $table->string('floors')->nullable();
            $table->boolean('cellar')->nullable();
            $table->integer('land_area')->nullable();
            $table->string('accessibility')->nullable();
            $table->string('utility')->nullable();
            $table->tinyInteger('house_levels')->nullable();
            $table->boolean('water')->nullable();
            $table->boolean('gas')->nullable();
            $table->boolean('electricity')->nullable();
            $table->boolean('pipeline')->nullable();
            $table->boolean('lift')->nullable();
            $table->boolean('balcony')->nullable();
            $table->boolean('terrace')->nullable();
            $table->string('room_height')->nullable();
            $table->tinyInteger('bathroom_no')->nullable();
            $table->tinyInteger('toilet_no')->nullable();
            $table->boolean('disabled')->nullable();
            $table->boolean('aircondition')->nullable();
            $table->boolean('garden')->nullable();
            $table->string('google_address')->nullable();
            $table->float('map_lat',6,4)->nullable();
            $table->float('map_long',6,4)->nullable();
            $table->string('photo_id')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('kiemelt')->nullable();
            $table->tinyInteger('attraktivitas')->nullable();
            $table->tinyInteger('allapot')->nullable();
            $table->tinyInteger('extrak')->nullable();
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
