<?php

class Article_Author {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_author', function($table)
			{
					// ID of author
				$table->integer('author_id');

					// ID of author
				$table->integer('article_id');


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
		Schema::drop('article_author');
	}

}