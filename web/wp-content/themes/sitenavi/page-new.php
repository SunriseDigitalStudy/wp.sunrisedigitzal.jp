<?php
/*
Template Name: page-new
*/
?>

		<?php get_header("content"); ?>
		<div id="main-container" class="container">
		<div id="main-box">
		
		<ul id="tab-menu" data-btn="tab-trigger">
			<li class="select">全サイト</li>
			<li>ヌキなび</li>
			<li>フロなび</li>
			<li>オトナのスポニチ</li>
			<li>フードルTV</li>
			<li>パピヨンジョブ</li>
			<li>ガンガン</li>
		</ul>
<br />
<br />
		<!-- 全サイト記事一覧 -->
		<div id="all-news" class="newsbox" data-receive="tab-inner">
		<dl>
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>

					<dt data-btn="accodion-trigger">
						<?php if(get_post_meta($post->ID,'nukinavi',true) == 'nukinavi'): ?>
							ヌキなび
							<?php elseif(get_post_meta($post->ID,'furonavi',true) == 'furonavi'): ?>
							フロなび
							<?php elseif(get_post_meta($post->ID,'aaa',true) == 'aaa'): ?>
							スポニチ
							<?php elseif(get_post_meta($post->ID,'fudol',true) == 'fudol'): ?>
							フードルTV
							<?php elseif(get_post_meta($post->ID,'ppyn',true) == 'ppyn'): ?>
							パピヨン
							<?php elseif(get_post_meta($post->ID,'gangan',true) == 'gangan'): ?>
							ガンガン
							<?php else: ?>
							その他
							<?php endif; ?>

						<?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>

			<?php endwhile; else: ?>
			</dl>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />		

		<!-- ヌキなびの記事一覧 -->
		<div id="nukinavi" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'nukinavi', //カスタムフィールドのキー名
					'value' => 'nukinavi' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						ヌキなび <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- フロなびの記事一覧 -->
		<div id="furonavi" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'furonavi', //カスタムフィールドのキー名
					'value' => 'furonavi' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						フロなび <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />
		<!-- オトナのスポニチの記事一覧 -->
		<div id="aaa" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'aaa', //カスタムフィールドのキー名
					'value' => 'aaa' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						スポニチ <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- フードルTV関東の記事一覧 -->
		<div id="fudol" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'fudol', //カスタムフィールドのキー名
					'value' => 'fudol' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						フードル <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />
		<!-- パピヨンジョブの記事一覧 -->
		<div id="ppyn" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'ppyn', //カスタムフィールドのキー名
					'value' => 'ppyn' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						パピヨン <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />

		<!-- ガンガンの記事一覧 -->
		<div id="gangan" class="newsbox hidden" data-receive="tab-inner">
			<?php
				$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
					$param = array( //パラメータ。
					'meta_query' => array( array( //カスタムフィールド指定
					'key' => 'gangan', //カスタムフィールドのキー名
					'value' => 'gangan' //そのフィールドに入れられている値名
					)),
					'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
					'post_type' => 'news', //カスタム投稿タイプのみを指定。
					'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
					'orderby' => 'ID',
					'order' => 'DESC' //降順。大きい値から小さい値の順。
				);
				$myQuery->query($param);  // クエリにパラメータを渡す
			?>
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<dl>
					<dt data-btn="accodion-trigger">
						ガンガン <?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span>
					</dt>
					<dd class="accodion-inner" data-receive="accodion-inner">
						<?php the_content(); ?>
					</dd>
				</dl>
			<?php endwhile; else: ?>
				<p>新着情報はありません。</p>
			<?php endif; ?>
		</div>
<hr />
</div>


			</div>
		<?php get_footer(); ?>
