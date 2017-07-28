<?php

function create_menu($menu_items, $key, $value) {
	$tools_menu = array(
		1 => array(
			"title" => "template",
			"link" => "http://projects.nicolasgillespie.home/ng.tpl",
		),
		2 => array(
			"title" => "filter",
			"link" => "http://projects.nicolasgillespie.home/ng.filter",
		),
		3 => array(
			"title" => "mobile menu",
			"link" => "http://projects.nicolasgillespie.home/ng.mobile-menu",
		),
	);

	echo '<li class="menu_item ' . $value['title'] . '"><a href="' . $value['link'] . '">' . $value['title'] . '</a>';

	if($value['title'] == 'tools') {
		echo '<ul class="submenu">';
		foreach ($tools_menu as $tool_key => $tool_value) {
			echo '<li class="submenu_item ' . $tool_value['title'] . '"><a href="' . $tool_value['link'] . '">' . $tool_value['title'] . '</a></li>';
		}
		echo '</ul>';
	}

	echo '</li>';

	return;
}
