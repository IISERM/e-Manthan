<?php

class Create_Issue {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function($table)
			{
				// ID
				$table->increments('id');
	
				// Attributes
					// Categories in category (max 30 characters)
				$table->string('issue', 30);
	
				// Time Stamps
				$table->timestamps();
			}
		);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues');
	}

}