<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDockShopSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dock_shop_sections', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('header');
            $table->string('description');
            $table->string('link_text');
            $table->string('redirect_link');

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
        Schema::dropIfExists('dock_shop_sections');
    }
}
