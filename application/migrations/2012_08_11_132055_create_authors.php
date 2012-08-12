<?php

class Create_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creating Table for List of Authors
		Schema::create('authors', function($table)
			{
				// ID
				$table->increments('id');
	

				// Attributes
					// Name of Authors in name (max 125 characters)
				$table->string('name', 125);

					// Affiliation to IISER in affiliation (A lot can be written)
				$table->text('affiliation');

					// Description of Author in description
				$table->text('description');


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
		// Dropping table authors
		Schema::drop('authors');
	}

}