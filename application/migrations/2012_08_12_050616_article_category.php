<?php

class Article_Category {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_category', function($table)
			{
					// ID of category
				$table->integer('category_id');

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
		Schema::drop('article_category');
	}

}