<?php
//カスタムメニュー追加
function my_custom_init() {
    register_post_type( 'news', array(
        'label' => '新着情報一覧',
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        'menu_position' => 5,
        'has_archive' => true
    ));
	
    register_post_type( 'price-campaign', array(
        'label' => '料金キャンペーン情報一覧',
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        'menu_position' => 6,
        'has_archive' => true
    ));
	
    register_post_type( 'QandA', array(
        'label' => 'QアンドA一覧',
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        'menu_position' => 7,
        'has_archive' => true
    ));

    register_post_type( 'download', array(
        'label' => '資料ダウンロード一覧',
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        'menu_position' => 8,
        'has_archive' => true
    ));
	
}
add_action( 'init', 'my_custom_init' );


//画像挿入時にaタグが付かないようにする。
function remove_a_tag_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size) {
  return strip_tags($html, '<img>');
}
add_filter('image_send_to_editor', 'remove_a_tag_image_send_to_editor', 10, 7);


//製作者の項目は非表示
function custom_columns($columns) {
        unset($columns['author']);
        return $columns;
}
add_filter( 'manage_posts_columns', 'custom_columns' );


// 投稿一覧にカスタムフィールドの列を追加 
/* function manage_posts_columns($columns) {
    $columns['nukinavi'] = "ヌキなび";
	$columns['furonavi'] = "フロなび";
	$columns['aaa'] = "スポニチ";
	$columns['fudol'] = "フードル";
	$columns['ppyn'] = "パピヨン";
	$columns['gangan'] = "ガンガン";
	return $columns;
}
function add_column($column_name, $post_id) {
	if( $column_name == 'nukinavi' ) {
		$stitle = get_post_meta($post_id, 'nukinavi', true);
	}
	if( $column_name == 'furonavi' ) {
		$stitle = get_post_meta($post_id, 'furonavi', true);
	}
	if( $column_name == 'aaa' ) {
		$stitle = get_post_meta($post_id, 'aaa', true);
	}
	if( $column_name == 'fudol' ) {
		$stitle = get_post_meta($post_id, 'fudol', true);
	}
	if( $column_name == 'ppyn' ) {
		$stitle = get_post_meta($post_id, 'ppyn', true);
	}
	if( $column_name == 'gangan' ) {
		$stitle = get_post_meta($post_id, 'gangan', true);
	}
	if ( isset($stitle) && $stitle ) {
		echo esc_attr($stitle);
	} else {
		echo __('None');
	}
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 ); */

?>


