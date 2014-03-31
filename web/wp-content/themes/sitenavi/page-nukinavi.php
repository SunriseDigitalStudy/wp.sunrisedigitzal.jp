<?php
/*
Template Name: page-nukinavi
*/
?>

		<?php get_header(); ?>
		
		<div id="main-container" class="container">

			<div id="main-box">
				<div id="site-header">
					<div id="site-data">
					<h3>ヌキなび</h3>
						<p></p>
						<dl>
							<dt>Site URL</dt>
							<dd>PC<a href="http://www.nukinavi.com/top.html" target="_blank">http://www.nukinavi.com/top.html</a></dd>
							<dd>モバイル<a href="http://www.nukinavi.com/i/top" target="_blank">http://www.nukinavi.com/i/top</a></dd>
							<ddスマホ<a href="http://www.nukinavi.com/sp/top" target="_blank">http://www.nukinavi.com/sp/top</a>></dd>
						</dl>
					</div>
					<p id="site-thum">ヌキなびサムネイル</p>
				</div>
				<div id="push">
					<h4>ここをプッシュしてください！</h4>
				</div>
				<div id="q-a">
					<?php
						$myQuery = new WP_Query(); // WP_Queryオブジェクト生成
							$param = array( //パラメータ。
							'meta_query' => array( array( //カスタムフィールド指定
							'key' => 'nukinavi', //カスタムフィールドのキー名
							'value' => 'nukinavi' //そのフィールドに入れられている値名
							)),
							'posts_per_page' => '-1', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
							'post_type' => 'QandA', //カスタム投稿タイプのみを指定。
							'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
							'orderby' => 'ID',
							'order' => 'DESC' //降順。大きい値から小さい値の順。
						);
						$myQuery->query($param);  // クエリにパラメータを渡す
					?>
					<?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
						<dl>
							<dt data-btn="accodion-trigger">
								<?php the_title(); ?>
							</dt>
							<dd class="accodion-inner" data-receive="accodion-inner">
								<?php the_content(); ?>
							</dd>
						</dl>
					<?php endwhile; else: ?>
						<p>現在質問はありません。</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<?php get_footer(); ?>
