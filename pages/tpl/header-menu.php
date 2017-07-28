<?php
	$title = $_ng_conf['current']['title'];
?>
<header>
	<div class="container">
		<div class="info"><?php echo $_ng_conf['website']['info']; ?></div>
		<div class="email txtSelect"><a href="mailto:<?php echo $_ng_conf['website']['email']; ?>"><?php echo $_ng_conf['current']['email']; ?></a></div>
	</div>
	<div class="header-top">
		<div class="title">
			<h1>Nicolas Gillespie</h1>
			<h2><?php echo $title; ?></h2>
		</div>
		<?php
			$menu_items = array(
				1 => array(
					"title" => 'tools',
					"link" => $_ng_conf['domains']['projects'],
				),
				2 => array(
					"title" => 'portfolio',
					"link" => $_ng_conf['domains']['portfolio'],
				),
				3 => array(
					"title" => 'blog',
					"link" => $_ng_conf['domains']['blog'],
				),
			);

			echo '<nav id="ng_menu" data-menu="570">';
			echo '<ul id="default_menu">';

			foreach ($menu_items as $key => $value) {
				create_menu($menu_items, $key, $value);
			}

			echo '</ul>';
			echo '<ul id="mobile_menu">';

			foreach ($menu_items as $key => $value) {
				create_menu($menu_items, $key, $value);
			}

			echo '</ul></nav>';

		// $dir = $_ng_param['path']['base_url'];
		// $link_projects = $GLOBALS['_ng_param']['domaine']['projects'];
		// $folders = scandir($dir);
		// $add_tool_title = true;
		// echo '<ul class="ng-primary-menu">';
		// echo '<li class="opener"><span class="ico ico-menu ico-left-menu">&nbsp;</span></li>';
		//
		// foreach ($folders as $key => $value) {
		//   if(strpos($value, '.') === false && strpos($value, 'config') === false && $value != 'home' ) {
		// 	$class = $value;
		//
		// 	if(strpos($value, 'ng-') == 0) {
		// 	  if($add_tool_title) {
		// 		$add_tool_title = false;
		// 		echo '<li class="' . $class . ' title"><a class="link" href="/home/tools"><span class="ico ico-tools">&nbsp;</span><span class="txt">Tools</span></a></li>';
		// 	  }
		// 	  $class .= ' tools';
		// 	}
		//
		// 	// echo '<li class="' . $class . '"><a class="link" href="' . $link_projects . $value . '"><span class="ico ico-filter">&nbsp;</span><span class="txt">' . $value . '</span></a></li>';
		//   }
		// }
		// echo '</ul>';
		?>

	</div>
</header>
