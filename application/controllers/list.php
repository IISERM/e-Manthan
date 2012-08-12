<?php

class List_Controller extends Base_Controller {

	public function action_index()
	{
		return View::make('archives.index');
	}

}