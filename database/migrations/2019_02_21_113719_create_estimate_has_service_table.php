<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimateHasServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimate_has_service', function(Blueprint $table)
		{
			$table->integer('estimate_id')->index('fk_estimate_has_service_estimate1_idx');
			$table->integer('service_id')->index('fk_estimate_has_service_service1_idx');
			$table->date('startDate');
			$table->date('endDate');
			$table->string('startAddress', 80)->nullable();
			$table->string('reference', 80)->nullable();
			$table->string('endAddress', 45)->nullable();
			$table->primary(['estimate_id','service_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimate_has_service');
	}

}
