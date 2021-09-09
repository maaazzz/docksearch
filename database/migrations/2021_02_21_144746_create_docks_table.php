<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('phone');
            $table->string('alternate_phone')->nullable();
            $table->string('marine_name')->nullable();
            $table->string('web_page')->nullable();
            $table->string('list_type');
            $table->integer('price')->nullable();
            $table->integer('price_for_rent')->nullable();
            $table->string('dock_country');
            $table->string('dock_state');
            $table->string('dock_city');
            $table->string('dock_address_one');
            $table->string('dock_address_two');
            $table->string('zip_code');
            $table->string('dock_description');
            $table->string('location_type');
            $table->string('dock_type');
            $table->string('max_length');
            $table->string('max_width');
            $table->string('max_draw');
            $table->string('max_height');
            $table->string('dock_attributes');
            $table->string('county')->nullable();
            $table->integer('dock_status')->default(0);
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
        Schema::dropIfExists('docks');
    }
}
