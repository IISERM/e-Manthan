<?php
Class Author extends Eloquent
{
	public static $timestamps = true;

	// Authors related to Articles
	public function article()
	{
		return $this->has_many_and_belongs_to('Article');
	}
}