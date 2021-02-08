<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item',function (Blueprint $table){
            $table->tinyInteger("star1")->default(0);
            $table->tinyInteger("star2")->default(0);
            $table->tinyInteger("star3")->default(0);
            $table->tinyInteger("star4")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn("star1");
        $table->dropColumn("star2");
        $table->dropColumn("star3");
        $table->dropColumn("star4");
    }
}
