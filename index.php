<?php

	$page = 'home';

	global $page;

	require_once(dirname(__FILE__) .'/require_config.php');

	$_ng_conf['current']['page'] = 'Template';
	$_ng_conf['current']['project'] = 'template';
	$_ng_conf['current']['title'] = 'Projects template';
	$_ng_conf['current']['path'] = '/ng.tpl';

	include $_ng_conf['projects']['template']['dir'] . '/pages/tpl/header.php';
?>

	<div class="content">

	</div>

<?php

	include $_ng_conf['projects']['template']['dir'] . '/pages/tpl/footer.php';

?>
