<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNeededDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('neededDocument', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('status', 20)->default('wait');
			$table->date('expirationDate')->nullable();
			$table->string('name', 45);
			$table->string('link');
			$table->integer('collaborater_id')->index('fk_neededDocument_collaborater1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('neededDocument');
	}

}
