<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

		<?php
			include $_ng_conf['projects']['template']['dir'] . '/pages/functions.php';

			$URI = $_SERVER['REQUEST_URI'];
			$is_ng_project = strpos($URI, '/ng.');

			$prj;
			$fullprj = $_ng_conf['current']['path'];

			if($is_ng_project !== false) {
				$prj = str_replace('/ng.', '', $URI);
			}

			if(strpos($prj, '/') + 1 == strlen($prj)) {
				$prj = substr($prj, 0, -1);
			}

			if($_ng_conf['projects'][$prj] !== NULL) {
				$_ng_conf['current']['project'] = $prj;
			}
		?>

		<meta name="robots" content="noindex, nofollow">

		<meta name="description" content="" />
 		<meta name="keywords" content="" />

		<link rel="icon" href="<?php echo $_ng_conf['domains']['projects'] . $_ng_conf['projects']['template']['path'] . $_ng_conf['medias']['img']; ?>/favicon.png" sizes="112x112" type="image/png"></link>

		<title>NG | <?php echo $_ng_conf['current']['page']; ?></title>

		<!-- style available in the template -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'></link>
		<link rel="stylesheet" media="all" href="<?php echo $_ng_conf['domains']['projects'] . $_ng_conf['projects']['template']['path'] . $_ng_conf['medias']['css']; ?>/ng.styles.css"></link>

		<!-- styles available in the specific project -->
		<?php
			if($_ng_conf['current']['add_style']) {
				get_additionnal_styles($_ng_conf);
			}
		?>

		<!-- script available in the template -->
		<script type="text/javascript" src="<?php echo $_ng_conf['domains']['projects'] . $_ng_conf['projects']['template']['path'] . $_ng_conf['medias']['lib']; ?>/jquery/jquery-2.2.3.min.js"></script>

		<!-- script available in the specific project -->
		<script type="text/javascript" src="<?php echo $_ng_conf['domains']['projects'] . $_ng_conf['projects']['template']['path'] . $_ng_conf['medias']['js']; ?>/ng.script.js"></script>
		<?php
			if($_ng_conf['current']['add_script']) {
				get_additionnal_script($_ng_conf);
			}
		?>
	</head>
	<body>
<?php
	include 'header-menu.php';
?>
