<!DICITYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />	
<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<?php wp_head(); ?>
		<script src="<?php bloginfo('template_url'); ?>/js/accodion.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/tab.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/util.js" type="text/javascript"></script>
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
				<li class="baitai"><a href="" data-btn="trigger" data-sync="trigger-action">媒体解説</a></li>
				<li><a href="/download/">資料ダウンロード</a></li>
				<li><a href="/price/">料金</a></li>
				<li><a href="">ブログ</a></li>
			</ul>
			<div id="navi-site" class="arrow-box" data-sync-receive="trigger-action">
				<ul>
					<li><a href="/nukinavi/">ヌキなび</a></li>
					<li><a href="/furonavi/">フロなび</a></li>
					<li><a href="/aaa-sponichi/">オトナのスポニチ</a></li>
					<li><a href="/fudol/">フードルTV関東</a></li>
					<li><a href="/ppyn/">パピヨンジョブ</a></li>
					<li><a href="/gangan/">ガンガン</a></li>
				</ul>
			</div>
		</div>
	</div>