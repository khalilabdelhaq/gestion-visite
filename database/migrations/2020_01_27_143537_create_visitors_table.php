<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateVisitorsTable.
 */
class CreateVisitorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitors', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('cin');
			$table->string('service');
			$table->boolean('sorti')->default(false);;
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visitors');
	}
}
