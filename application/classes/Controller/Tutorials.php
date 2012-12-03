<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tutorials extends Controller_Layout
{
	public function action_show()
	{
		$tutorial = $this->request->param('tutorial');

		$this->content = new View_Page_Tutorial;

		try
		{
			$this->content->tutorial = new View('tutorials/'.$tutorial);
		}
		catch(View_Exception $e)
		{
			throw HTTP_Exception::factory(404, 'Tutorial not found');
		}
	}

}