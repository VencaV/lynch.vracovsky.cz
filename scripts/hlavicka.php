<?php $index = true;?>
<!doctype html>
<html lang="cs" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="David Lynch,režisér,filmy">
  <meta name="description" content="<?php echo $popis;?>">
  <meta name="author" content="Václav Vracovský, vaclavvracovsky@gmail.com">
  <title>David Lynch | <?php echo $title;?></title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="styl.css?1" media="screen">
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta property="og:title" content="<?php echo $title;?>">
	<meta property="og:description" content="<?php echo $popis;?>">
	<meta property="og:image" content="http://lynch.vracovsky.cz/david-lynch.jpg">
  </head>
  <body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
  <div id="obsah">
  <a href="index.php" id="logo" title="David Lynch - Úvodní strana">David Lynch<span>&nbsp;</span></a>
	<div class="motto">David Lynch
		<span>web věnovaný jemu a jeho tvorbě</span>

		<div class="social">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://lynch.vracovsky.cz" data-text="David Lynch - životopis, biografie, filmografie" data-lang="cs">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="fb-like" data-href="http://lynch.vracovsky.cz/" data-send="true" data-layout="button_count" data-width="200" data-show-faces="true" data-colorscheme="dark"></div>
		</div>
		<!-- / social -->

	</div>
	<!-- / motto -->

	<nav id="navigation">

		<ul>
			<li><a href="index.php" title="Úvodní strana">Úvod</a></li>
			<li><a href="filmyindex.php" title="Filmografie Davida Lynche">Filmy</a></li>
			<li><a href="odkazy.php" title="Odkazy na zdroje o Davidu Lynchovi">Odkazy</a></li>
		</ul>

		<?php if ($menu=="f" || $menu=="f1" || $menu=="f2" || $menu=="f3" || $menu=="f4" || $menu=="ff"){?>
		<ul class="sub">
			<li><a href="filmy1.php" title="Přehled celovečerních filmů Davida Lynche">Celovečerní</a></li>
			<li><a href="filmy2.php" title="Přehled krátkých filmů Davida Lynche">Krátké</a></li>
			<li><a href="filmy3.php" title="Přehled televizní tvorby Davida Lynche">TV tvorba</a></li>
			<li><a href="filmy4.php" title="Přehled dokumentárních filmů Davida Lynche">Dokumentární</a></li>
		</ul>
		<?php }?>

	</nav>
	<!-- / navigation -->

	<h1><?php echo "$title";?></h1>
