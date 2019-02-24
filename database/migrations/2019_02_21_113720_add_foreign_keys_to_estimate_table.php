<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstimateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estimate', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_estimate_customer1')->references('id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estimate', function(Blueprint $table)
		{
			$table->dropForeign('fk_estimate_customer1');
		});
	}

}
