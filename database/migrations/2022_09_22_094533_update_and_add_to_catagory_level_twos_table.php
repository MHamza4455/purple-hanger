<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAndAddToCatagoryLevelTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catagory_level_twos', function (Blueprint $table) {

            $table->dropColumn('firstcat_id'); 
            $table->unsignedBigInteger('catagory_level_one_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catagory_level_twos', function (Blueprint $table) {
            //
        });
    }
}
