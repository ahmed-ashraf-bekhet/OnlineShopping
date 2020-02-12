<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePillProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pill_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('pill_id')->unsigned();
            $table->integer('num_of_items')->unsigned();
            $table->integer('total_price')->unsigned();
            $table->foreign('pill_id')->references('id')->on('pills')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('ID')->on('products')->onUpdate('no action')->onDelete('no action');
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
        Schema::dropIfExists('pill_products');
    }
}
