

		<?php get_header(); ?>
		
		<div id="main-container" class="container">
			<ul id="main-box">
				<li class="nukinavi">
					<a href="/nukinavi/">
						<dl>
							<dt>ヌキなび</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/nukinavi.jpg" alt="ヌキなび" /></dd>
							<dd class="caption">運営実績10年以上の弊社看板サイト！</dd>
							<dd class="text">名実共に弊社の看板となる風俗情報サイトです。使い勝手を重視したサイト作りと充実のコンテンツ群でアピールします。</dd>
						</dl>
					</a>
				</li>
				<li class="furonavi">
					<a href="/furonavi/">
						<dl>
							<dt>フロなび</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/furonavi.jpg" alt="フロなび" /></dd>
							<dd class="caption">全国展開するソープ専門サイト！</dd>
							<dd class="text">店舗公式サイトへのアクセス数増加を主な目的としたソープ専門サイトです。ソープ嬢専門の日記サイト「フログ」も同時展開中！</dd>
						</dl>
					</a>
				</li>
				<li class="aaa-sponichi corner">
					<a href="/aaa-sponichi/">
						<dl>
							<dt>スポニチ</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/aaa.jpg" alt="スポニチ" /></dd>
							<dd class="caption">有名新聞社の名を冠した風俗情報サイト！</dd>
							<dd class="text">店舗公式サイトへのアクセス数増加を狙ったサイトです。スポニチアネックスと直結しているため、抜群の主客率を誇ります。</dd>
						</dl>
					</a>
				</li>
				<li class="fudol">
					<a href="/fudol/">
						<dl>
							<dt>フードルTV</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/fudol.jpg" alt="フードルTV" /></dd>
							<dd class="caption">風俗動画を投稿したいならココ！</dd>
							<dd class="text">動画に特化した風俗サイトです。約5000本もの動画が投稿され、「動画で風俗を探す」というコンセプトの元に運営しています。</dd>
						</dl>
					</a>
				</li>
				<li class="ppyn">
					<a href="/ppyn/">
						<dl>
							<dt>パピヨンジョブ</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/ppyn.jpg" alt="パピヨンジョブ" /></dd>
							<dd class="caption">風俗で働きたい女性向けの安心求人サイト</dd>
							<dd class="text">女性専用の風俗求人サイトです。メルアド登録不要の手軽さとバリエーションに富んだ充実のコンテンツで多数の女性を集めます。</dd>
						</dl>
					</a>
				</li>
				<li class="gangan corner">
					<a href="/gangan/">
						<dl>
							<dt>ガンガン</dt>
							<dd class="details">詳細を見る</dd>
							<dd class="site-image"><img src="http://wp.sunrisedigital.jp/wp-content/themes/sitenavi/images/top/gangan.jpg" alt="ガンガン" /></dd>
							<dd class="caption">ガンガン働きたいユーザーを集めます！</dd>
							<dd class="text">男性向け高収入求人サイト。スカウトメールなどの充実した機能とお得なキャンペーンで、ガンガン働きたい男性を引きつけます。</dd>
						</dl>
					</a>
				</li>
			</ul>



			<div id="under-box">
				<div id="new-info">
				
<?php
    $myQuery = new WP_Query(); // WP_Queryオブジェクト生成
		$param = array( //パラメータ。
	//	'meta_query' => array( array( //カスタムフィールド指定
	//	 'key' => 'nukinavi', //カスタムフィールドのキー名
	//	 'value' => 'nukinavi' //そのフィールドに入れられている値名
    //   )),
        'posts_per_page' => '5', //（整数）- 1ページに表示する記事数。-1 ならすべての投稿を取得。
        'post_type' => 'news', //カスタム投稿タイプのみを指定。
        'post_status' => 'publish', //取得するステータスを指定：publish（公開済み）
        'orderby' => 'ID',
        'order' => 'DESC' //降順。大きい値から小さい値の順。
    );
    $myQuery->query($param);  // クエリにパラメータを渡す
?>

<dl>
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

<?php the_title(); ?><span><?php the_time("Y年m月j日") ?></span></dt>
<dd class="accodion-inner" data-receive="accodion-inner"><?php the_content(); ?></dd>
</dl>
<?php endwhile; else: ?>
<p>新着情報はありません。</p>
<?php endif; ?>

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
