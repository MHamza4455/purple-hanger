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
            $table->string('name',40);
            $table->text('description',40);
            $table->string('slug', 255)->nullable();
            $table->DOUBLE('price');
            $table->DOUBLE('offer_price');
            $table->DOUBLE('quantity');
            $table->string('thumbnail', 255)->nullable();
            $table->string('tags', 255)->nullable();
            $table->unsignedBigInteger('firstcat_id');
            $table->unsignedBigInteger('secondcat_id');
            $table->unsignedBigInteger('thirdcat_id');
            $table->boolean('status')->default(1);
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
