<?php

class Article_Issue {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_issue', function($table)
			{
				// ID
				$table->increments('id');
	

					// ID of issue
				$table->integer('issue_id');

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
		Schema::drop('article_issue');
	}

}