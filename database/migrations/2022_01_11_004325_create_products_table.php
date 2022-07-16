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
            $table->bigInteger('categoryId');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('small_discription');
            $table->longText('discription');
            $table->string('orignal_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('quantity');
            $table->string('tax');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->string('meta_title');
            $table->string('meta_discription');
            $table->string('meta_keywords');
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
