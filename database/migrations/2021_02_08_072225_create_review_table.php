<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('review', function (Blueprint $table) {
            $table->bigIncrements("id");
			$table->unsignedBigInteger('item_id');
			$table->unsignedBigInteger("uid");
			$table->text("description");
			$table->tinyInteger("rating");
			$table->timestamps();

			$table->foreign('item_id')->references('id')->on('item')->onDelete('cascade');
			$table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('review');
	}
}
