<?php
/*
Template Name: page-download
*/
?>

		<?php get_header("content"); ?>
		
		<div id="main-container" class="container">
			<div id="title-box">
				<h2>資料ダウンロード</h2>
				<ul id="title-list">
					<li><a href="">ヌキなび</a></li>
					<li><a href="">フロなび</a></li>
					<li><a href="">オトナのスポニチ</a></li>
					<li><a href="">フードルTV</a></li>
					<li><a href="">パピヨンジョブ</a></li>
					<li><a href="">ガンガン</a></li>
				</ul>
			</div>
			<div id="main-box">
		<!-- ヌキなびの記事一覧 -->
		<div id="nukinavi">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'nukinavi', //カスタムフィールドのキー名
					'value' => 'nukinavi' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>ヌキなび</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- フロなびの記事一覧 -->
		<div id="furonavi">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'furonavi', //カスタムフィールドのキー名
					'value' => 'furonavi' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>フロなび</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />
		<!-- オトナのスポニチの記事一覧 -->
		<div id="aaa">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'aaa', //カスタムフィールドのキー名
					'value' => 'aaa' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>オトナのスポニチ</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- フードルTV関東の記事一覧 -->
		<div id="fudol">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'fudol', //カスタムフィールドのキー名
					'value' => 'fudol' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>フードルTV</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />
		<!-- パピヨンジョブの記事一覧 -->
		<div id="ppyn">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'ppyn', //カスタムフィールドのキー名
					'value' => 'ppyn' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>パピヨンジョブ</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- ガンガンの記事一覧 -->
		<div id="gangan">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'gangan', //カスタムフィールドのキー名
					'value' => 'gangan' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'download', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<h3>ガンガン</h3>	
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>現在情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />				
			
			</div>
		</div>
		
		<?php get_footer(); ?>
