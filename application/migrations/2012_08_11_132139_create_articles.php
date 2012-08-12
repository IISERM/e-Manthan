<?php

class Create_Articles
{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creating Table for List of Articles
		Schema::create('articles', function($table)
			{
				// ID
				$table->increments('id');
	

				// Attributes
					// Title of Article in title (max 255 characters)
				$table->string('title', 255);

					// Article in content (A lot can be written)
				$table->text('content');

					// Note from the author in Notes
				$table->text('notes');

					// Thumbnail picture code
				$table->string('thumbnail',40);

					// Deleted or not
				$table->boolean('deleted');

					// Published or not
				$table->boolean('published');


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
		Schema::drop('articles');
	}

}