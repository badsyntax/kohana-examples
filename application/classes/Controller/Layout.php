<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller 
{
	protected $content = NULL;

	public function after()
	{
		$this->response->body(
			Kostache_Layout::factory()->render($this->content)
		);
	}
} // End Layout