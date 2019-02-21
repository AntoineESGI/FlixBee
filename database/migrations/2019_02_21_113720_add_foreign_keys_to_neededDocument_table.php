<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNeededDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('neededDocument', function(Blueprint $table)
		{
			$table->foreign('collaborater_id', 'fk_neededDocument_collaborater1')->references('id')->on('collaborator')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('neededDocument', function(Blueprint $table)
		{
			$table->dropForeign('fk_neededDocument_collaborater1');
		});
	}

}
