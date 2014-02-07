<?php
/*
Template Name: page-price
*/
?>

		<?php get_header(); ?>
		<div id="main-container" class="container">
		
		<div id="main-box">
<?php
    $myQuery = new WP_Query(); // WP_Queryオブジェクト生成
		$param = array( //パラメータ。
	//	'meta_query' => array( array( //カスタムフィールド指定
	//	 'key' => 'nukinavi', //カスタムフィールドのキー名
	//	 'value' => 'nukinavi' //そのフィールドに入れられている値名
    //   )),
        'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
        'post_type' => 'price-campaign', //カスタム投稿タイプのみを指定。
        'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
        'orderby' => 'ID',
        'order' => 'DESC' //降順。大きい値から小さい値の順。
    );
    $myQuery->query($param);  // クエリにパラメータを渡す
?>
<ul>
<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
<li><?php the_content(); ?></li>
<?php endwhile; else: ?>
<li>新着情報はありません。</li>
<?php endif; ?>
</ul>
			</div>
		</div>
		<?php get_footer(); ?>
