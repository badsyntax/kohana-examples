<?php defined('SYSPATH') or die('No direct script access.');

class View_Fragments_Footer
{
	public function scripts()
	{
		$scripts = Kohana::$config->load('assets.js');

		return implode("\n", array_map('HTML::script', $scripts));
	}
}