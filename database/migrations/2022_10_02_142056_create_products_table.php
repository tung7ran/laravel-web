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
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('desc')->nullable();
            $table->text('content')->nullable();
            $table->text('price')->nullable();
            $table->text('sale_price')->nullable();
            $table->integer('sale')->nullable();
            $table->text('image')->nullable();
            $table->text('more_image')->nullable();
            $table->integer('hot')->nullable();
            $table->integer('is_sale')->nullable();
            $table->integer('status')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
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
