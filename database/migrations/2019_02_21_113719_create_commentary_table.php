<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentary', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('text');
			$table->integer('isReport')->default(0);
			$table->integer('customer_id')->index('fk_commentary_customer1_idx');
			$table->integer('collaborater_id')->index('fk_commentary_collaborater1_idx');
			$table->date('date');
			$table->integer('rating')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commentary');
	}

}
