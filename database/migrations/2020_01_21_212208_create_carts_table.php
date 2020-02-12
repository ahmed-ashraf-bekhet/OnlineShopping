<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('UserID')->unsigned();
            $table->foreign('UserID')->references('ID')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
        // Schema::drop('carts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
        // Schema::table('carts', function (Blueprint $table) {
        //     $table->dropColumn('UserID');
        // });
    }
}
