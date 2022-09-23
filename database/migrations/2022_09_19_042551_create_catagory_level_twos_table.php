<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagoryLevelTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagory_level_twos', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->text('description',40);
            $table->string('slug', 255)->nullable();
            $table->unsignedBigInteger('firstcat_id');
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
        Schema::dropIfExists('catagory_level_twos');
    }
}
