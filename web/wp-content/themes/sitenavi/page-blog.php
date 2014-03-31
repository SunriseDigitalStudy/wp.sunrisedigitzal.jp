<?php
/*
Template Name: page-blog
*/
?>

		<?php get_header(); ?>
		<div id="main-container" class="container">
		<div id="main-box">
			<?php
				$args = array(
					'post_type' => 'post', /* 投稿タイプ */
					'paged' => $paged
				); ?>

			<?php query_posts( $args ); ?>

			<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post();
				/* ループ開始 */ ?>

				<div class="post">
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<p class="date"><?php the_time("Y年m月j日") ?></p>
					<?php the_post_thumbnail(); /* アイキャッチ */ ?>
					<?php the_excerpt(); ?>   
					<a　class="more-link" href="<?php the_permalink() ?>">続きを読む »</a>
				</div>

			<?php endwhile; ?>      

			<?php else : ?>

				<div class="post">         
					<h3>記事がありません</h3>
					<p>表示する記事はありませんでした</p>
				</div>

			<?php endif; ?>

			</div>
		</div>
		<?php get_footer(); ?>
