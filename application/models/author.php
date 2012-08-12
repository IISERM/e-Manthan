<?php
Class Author extends Eloquent
{
	public static $timestamps = true;

	// Cateories related to Articles
	public function articles()
	{
		return $this->has_many_and_belongs_to('Article');
	}
}