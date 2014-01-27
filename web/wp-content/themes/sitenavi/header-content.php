<!DICITYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />	
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	<div id="header">
		<div class="container">
		<h1><a href="http://wp.sunrisedigital.jp/"><img src="<?php bloginfo('template_directory');?>/images/logo.jpg" alt="" /></a></h1>
		<ul id="header-toplist">
			<li><a href="/new/">新着情報</a></li>
			<li><a href="">問い合わせフォーム</a></li>
		</ul>
		<ul id="header-navi">
			<li><a href="">a媒体解説</a></li>
			<li><a href="">資料ダウンロード</a></li>
			<li><a href="/price/">料金</a></li>
			<li><a href="">ブログ</a></li>
		</ul>
		</div>
	</div>