<?php

	$page = 'template';

	global $page;

	require_once(dirname(__FILE__) .'/require_config.php');

	$_ng_conf['current']['page'] = $_ng_conf['projects'][$page]['title'];
	$_ng_conf['current']['path'] = $_ng_conf['projects'][$page]['path'];
	$_ng_conf['current']['project'] = $page;
	$_ng_conf['current']['title'] = $_ng_conf['projects'][$page]['title'];

	// Insert include pages and functions for future projects


	// tpl
	include $_ng_conf['projects']['template']['dir'] . '/pages/tpl/header.php';
?>

	<div class="content">
		<?php
			include $_ng_conf['projects'][$_ng_conf['current']['page']]['dir'] . '/pages/content.php';
		?>
	</div>

<?php

	include $_ng_conf['projects']['template']['dir'] . '/pages/tpl/footer.php';

?>
