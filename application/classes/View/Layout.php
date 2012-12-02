<?php defined('SYSPATH') or die('No direct script access.');

class View_Layout 
{
	public $title = 'Kohana examples';

	public function __construct()
	{
		$this->head = Kostache::factory()->render(
			new View_Fragments_Head()
		);
		
		$this->footer = Kostache::factory()->render(
			new View_Fragments_Footer()
		);

		$this->nav = Kostache::factory()->render(
			new View_Fragments_Nav()
		);
	}
}