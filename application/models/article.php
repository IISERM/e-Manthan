<?php
Class Author extends Eloquent
{
	public static $timestamps = true;

	// Authors to Articles
	public function authors()
	{
		return $this->has_many_and_belongs_to('Author');
	}

	// Categories to Articles
	public function categories()
	{
		return $this->has_many_and_belongs_to('Category');
	}

}