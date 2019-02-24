<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReceiptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('receipt', function(Blueprint $table)
		{
			$table->foreign('estimate_id', 'fk_receipt_estimate1')->references('id')->on('estimate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('receipt', function(Blueprint $table)
		{
			$table->dropForeign('fk_receipt_estimate1');
		});
	}

}
