<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rsvps', function(Blueprint $table)
		{
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('guest_first_name', 50);
			$table->string('guest_last_name', 50);
			$table->enum('reservation', [
				'Yes',
				'No'
				]);
			$table->text('comments');
			$table->increments('id');
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
		Schema::drop('rsvps');
	}

}