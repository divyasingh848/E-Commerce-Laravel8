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
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_size')->nullable();
            $table->string('product_color');
            $table->string('selling_price');
            $table->string('product_desc');
            $table->string('product_thumbnail');
            $table->integer('featured')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps('');
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
