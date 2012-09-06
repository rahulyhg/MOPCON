<?php
	$pages = array(
		'location' => 'pages/location.php',
		'association' => 'pages/association.php',
		'sessions' => 'pages/sessions.php',
		'sponsors' => 'pages/sponsors.php',
		'register' => 'pages/register.php',
		);
	if (!isset($pages[$_GET['to']])) {
		header('location:index.php');
	}
	$thisPage = $_GET['to'];
	$pagePath = $pages[$thisPage];
	$arr = array($thisPage, 'Page');
?>
<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Mobile Open Platform Conference</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="<?php echo join('', $arr) ?>" class="normalLayout">
	<div id="wrap">
		<?php include_once('header.php'); ?>
		<div id="container">
			<div id="mainContent">
				<?php include($pagePath); ?>
			</div>
			<hr />
		</div>
		<?php include_once('nav.php'); ?>
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>