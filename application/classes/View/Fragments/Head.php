<?php defined('SYSPATH') or die('No direct script access.');

class View_Fragments_Head
{
	public function styles()
	{
		$styles = Kohana::$config->load('assets.css');

		return implode("\n", array_map('HTML::style', $styles));
	}
}