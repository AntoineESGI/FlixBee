<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNeededDocumentHasCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('neededDocument_has_category', function(Blueprint $table)
		{
			$table->integer('neededDocument_id');
			$table->integer('neededDocument_collaborator_id');
			$table->integer('category_id')->index('fk_neededDocument_has_category_category1_idx');
			$table->string('status', 45)->default('wait');
			$table->index(['neededDocument_id','neededDocument_collaborator_id'], 'fk_neededDocument_has_category_neededDocument1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('neededDocument_has_category');
	}

}
