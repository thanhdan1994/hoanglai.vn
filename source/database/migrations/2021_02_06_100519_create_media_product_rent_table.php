<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaProductRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_product_rent', function (Blueprint $table) {
            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')->references('id')->on('media');
            $table->unsignedBigInteger('product_rent_id');
            $table->foreign('product_rent_id')->references('id')->on('products_rent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_product_rent');
    }
}
