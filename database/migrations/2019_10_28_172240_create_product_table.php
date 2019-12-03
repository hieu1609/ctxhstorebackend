<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('product_name', 255);
            $table->integer('price');
            $table->string('product_image', 500);
            $table->string('description', 1500);
            $table->integer('category_id')->unsigned()->index();
            $table->float('rating', 8, 2)->default(0);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('product_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
