<?php defined('SYSPATH') or die('No direct script access.');

class View_Fragments_Nav
{
	public function pages()
	{
		return Kohana::$config->load('navigation.pages');
	}
}