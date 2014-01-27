<?php
/*
Template Name: page-new
*/
?>

		<?php get_header("content"); ?>
		<div id="main-container" class="container">
		<div id="main-box">
		<div id="a">
<?php
    $myQuery = new WP_Query(); // WP_Queryオブジェクト生成
		$param = array( //パラメータ。
		'meta_query' => array( array( //カスタムフィールド指定
		'key' => 'nukinavi', //カスタムフィールドのキー名
		'value' => 'nukinavi' //そのフィールドに入れられている値名
		)),
        'posts_per_page' => '10', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
        'post_type' => 'news', //カスタム投稿タイプのみを指定。
        'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
        'orderby' => 'ID',
        'order' => 'DESC' //降順。大きい値から小さい値の順。
    );
    $myQuery->query($param);  // クエリにパラメータを渡す
?>
<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
<dl>
<dt>
ヌキなび
<?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span></dt>
<dd><?php the_content(); ?></dd>
<?php endwhile; else: ?>
<dt>新着情報はありません。</dt>
</dl>
<?php endif; ?>
</div>
<div id="b">
<?php
    $myQuery = new WP_Query(); // WP_Queryオブジェクト生成
		$param = array( //パラメータ。
		'meta_query' => array( array( //カスタムフィールド指定
		'key' => 'furonavi', //カスタムフィールドのキー名
		'value' => 'furonavi' //そのフィールドに入れられている値名
		)),
        'posts_per_page' => '10', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
        'post_type' => 'news', //カスタム投稿タイプのみを指定。
        'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
        'orderby' => 'ID',
        'order' => 'DESC' //降順。大きい値から小さい値の順。
    );
    $myQuery->query($param);  // クエリにパラメータを渡す
?>
<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
<dl>
<dt>
フロなび
<?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span></dt>
<dd><?php the_content(); ?></dd>
<?php endwhile; else: ?>
<dt>新着情報はありません。</dt>
</dl>
<?php endif; ?>
</div>


			</div>
		</div>
		<?php get_footer(); ?>
