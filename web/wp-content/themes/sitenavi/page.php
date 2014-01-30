

		<?php get_header(); ?>
		
		<div id="main-container" class="container">
			<div id="main-box">
				<dl class="site-list">
					<dt>ヌキなび</dt>
					<dd class="site-image"><a href="/nukinavi/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
				<dl class="site-list">
					<dt>フロなび</dt>
					<dd class="site-image"><a href="/furonavi/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
				<dl class="site-list">
					<dt>オトナのスポニチ</dt>
					<dd class="site-image"><a href="/aaa-sponichi/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
				<dl class="site-list">
					<dt>フードルTV関東</dt>
					<dd class="site-image"><a href="/fudol/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
				<dl class="site-list">
					<dt>パピヨンジョブ</dt>
					<dd class="site-image"><a href="/ppyn/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
				<dl class="site-list">
					<dt>ガンガン</dt>
					<dd class="site-image"><a href="/gangan/">サイトイメージ画像</a></dd>
					<dd class="caption">見出し見出し見出し</dd>
					<dd class="text">サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明サイト説明</dd>
				</dl>
			</div>
			<div id="under-box">
				<div id="new-info">
				
				<dl class="feed">
<?php
    $myQuery = new WP_Query(); // WP_Queryオブジェクト生成
		$param = array( //パラメータ。
	//	'meta_query' => array( array( //カスタムフィールド指定
	//	 'key' => 'nukinavi', //カスタムフィールドのキー名
	//	 'value' => 'nukinavi' //そのフィールドに入れられている値名
    //   )),
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

<dt data-btn="accodion-trigger">

<?php if(get_post_meta($post->ID,'nukinavi',true) == 'nukinavi'): ?>
ヌキなび
<?php elseif(get_post_meta($post->ID,'furonavi',true) == 'furonavi'): ?>
フロなび
<?php elseif(get_post_meta($post->ID,'suponichi_aaa',true) == 'suponichi_aaa'): ?>
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

<?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span></dt>
<dd class="accodion-inner" data-receive="accodion-inner"><?php the_content(); ?></dd>
</dl>
<?php endwhile; else: ?>
<p>新着情報はありません。</p>
<?php endif; ?>
				</dl>
				</div>
				<div id="banners">
					<ul>
						<li><a href="">資料ダウンロード</a></li>
						<li><a href="">料金</a></li>
						<li><a href="">制作マル秘ブログ</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<?php get_footer(); ?>
