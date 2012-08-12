<?php
Class Article extends Eloquent
{
	public static $timestamps = true;
	public $includes = array('author','category','issue');

	// Authors to Articles
	public function author()
	{
		return $this->has_many_and_belongs_to('Author');
	}

	// Categories to Articles
	public function category()
	{
		return $this->has_many_and_belongs_to('Category');
	}

	// Issues to Articles
	public function issue()
	{
		return $this->has_many_and_belongs_to('Issue');
	}

}