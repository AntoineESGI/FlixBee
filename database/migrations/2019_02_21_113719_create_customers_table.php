<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 80);
			$table->string('mail', 80);
			$table->string('password', 45);
			$table->char('phoneNumber', 10);
			$table->string('photo')->nullable();
			$table->string('firstName', 45);
			$table->string('address', 80);
			$table->string('company_companyCode', 45)->nullable()->index('fk_customer_company1_idx');
			$table->integer('subscription_id')->nullable()->index('fk_customer_subscription1_idx');
			$table->string('country', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
