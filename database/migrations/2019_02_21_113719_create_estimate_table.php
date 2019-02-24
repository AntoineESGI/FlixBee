<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimate', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('price');
			$table->string('description', 45);
			$table->string('status', 45)->default('wait');
			$table->date('estimateDate');
			$table->integer('customer_id')->index('fk_estimate_customer1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimate');
	}

}
