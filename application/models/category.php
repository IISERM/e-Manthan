<?php
Class Category extends Eloquent
{
	public static $timestamps = true;

	// Cateories related to Articles
	public function article()
	{
		return $this->has_many_and_belongs_to('Article');
	}
}