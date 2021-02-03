<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id'); // HP, CANON, XEROX,...
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->unsignedBigInteger('category_id'); // máy in, máy photocopy, hộp mực máy in,...
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name', 255);
            $table->string('slug');
            $table->text('description');
            $table->longText('content')->nullable();
            $table->json('parameters')->nullable();
            $table->bigInteger('featured_image')->default(0);
            $table->decimal('price', 10, 2);
            $table->integer('discount')->default(0);
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
        Schema::dropIfExists('products');
    }
}
