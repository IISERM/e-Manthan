<?php

class Create_Categories {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function($table)
			{
				// ID
				$table->increments('id');
	
				// Attributes
					// Categories in category (max 30 characters)
				$table->string('category', 30);
	
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
		Schema::drop('categories');
	}

}