<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'pages' => array(
		array(
			'url' => '',
			'title' => __('Home'),
		),
		array(
			'url' => '/tutorials',
			'title' => 'Tutorials',
			'pages' => array(
				array(
					'url' => 'tutorials/installation',
					'title' => 'Installation',
				),
				array(
					'url' => 'tutorials/database',
					'title' => 'Database setup',
				),
				array(
					'url' => 'tutorials/minion',
					'title' => 'Minion setup',
				),
				array(
					'url' => 'tutorials/controller',
					'title' => 'Controller setup',
				),
				array(
					'url' => 'tutorials/kostache',
					'title' => 'View classes (KOstache)',
				),
				array(
					'url' => 'tutorials/assets',
					'title' => 'Site assets',
				)
			)
		),
	)
);