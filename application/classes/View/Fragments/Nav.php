<?php defined('SYSPATH') or die('No direct script access.');

class View_Fragments_Nav
{
	public function page_tree()
	{
		return $this->_get_page_tree(Kohana::$config->load('navigation.pages'), 'nav');
	}

	private function _get_page_tree($pages = array(), $list_class = '', $html = '')
	{
		$html = $list_class ? '<ul class="'.$list_class.'">' : '<ul>';

		$renderer = Kostache::factory();	

		foreach($pages as $page)
		{
			$has_pages = isset($page['pages']);

			if ($has_pages)
			{
				$html .= '<li class="dropdown">';
				$html .= '<a href="'.URL::site($page['url']).'" data-toggle="dropdown" class="dropdown-toggle">';
				$html .= $page['title'];
				$html .= ' <b class="caret"></b></a>';
				$html .= $this->_get_page_tree($page['pages'], 'dropdown-menu');
			}
			else
			{
				$html .= '<li>';
				$html .= '<a href="'.URL::site($page['url']).'">';
				$html .= $page['title'];
				$html .= '</a>';
			}

			$html .= '</li>';
		}
		
		$html .= '</ul>';

		return $html;
	}
}