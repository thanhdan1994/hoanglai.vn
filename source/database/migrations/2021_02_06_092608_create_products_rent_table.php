<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_rent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id'); // HP, CANON, XEROX,...
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('name', 255);
            $table->string('slug');
            $table->text('description');
            $table->longText('content')->nullable();
            $table->json('parameters')->nullable();
            $table->bigInteger('featured_image')->default(0);
            $table->decimal('price_rent', 10, 2);
            $table->boolean('favorite_flg')->default(0);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('products_rent');
    }
}
