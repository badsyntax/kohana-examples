<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Layout
{
	public function action_index()
	{
		$this->content = new View_Page_Home;
	}
} // End Home
