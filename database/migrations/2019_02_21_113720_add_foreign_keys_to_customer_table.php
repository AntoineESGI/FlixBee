<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer', function(Blueprint $table)
		{
			$table->foreign('company_companyCode', 'fk_customer_company1')->references('companyCode')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('subscription_id', 'fk_customer_subscription1')->references('id')->on('subscription')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_company1');
			$table->dropForeign('fk_customer_subscription1');
		});
	}

}
