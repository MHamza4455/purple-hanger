<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAndAddToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('firstcat_id'); 
            $table->dropColumn('secondcat_id'); 
            $table->dropColumn('thirdcat_id'); 
            $table->unsignedBigInteger('catagory_level_one_id');
            $table->unsignedBigInteger('catagory_level_two_id');
            $table->unsignedBigInteger('catagory_level_three_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
