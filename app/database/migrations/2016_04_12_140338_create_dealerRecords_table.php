<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dealerRecords', function(Blueprint $table)
		{
			$table->increments('Dealer_Key');
			$table->string("license", 255);
			$table->varchar("licenseType", 2);
			$table->varchar("licenseExp", 2);
			$table->longtext("name");
			$table->longtext("business");
			$table->string("street", 255);
			$table->string("city", 150);
			$table->string("state", 15);
			$table->string("zip", 75);
			$table->string('phone', 150);
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
		Schema::drop('dealerRecords');
	}

}
