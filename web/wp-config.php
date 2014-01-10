<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

//2014-01-09　宮田が下記コマンドでDBを作成しました
// CREATE SCHEMA IF NOT EXISTS `wp_sunrise` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
// GRANT ALL ON `wp_sunrise`.* TO 'ws_admin'@'localhost';

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_sunrise');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ws_admin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UoLKJ{E&] <*W$^R|$NLOW~-CzZDniwlu!EU9O>s$]s=@o`A6{P>IKZ7`jCHvOxM');
define('SECURE_AUTH_KEY',  'Him]?Ex:n37a5^H[Hn$d$+op>:WaT:^@Od$?Z;|d8u`(jotSffT}%2Y?0-;qSY+C');
define('LOGGED_IN_KEY',    '}Odb:9R^kRmFPs]Y7Wi29fDNoAwbNI{4j=}4gVZ+hr-vZ|z|cOXMpX%F@`HrHbGE');
define('NONCE_KEY',        'g|PES>r_Fb/IlY`LS_>S<e4D;ct~Y-P<_c1Jl~qi+x[KU%7r|T6i#g}Ma$P1FP3`');
define('AUTH_SALT',        ';-+5h*;irWFb51k*-hAY=vS)?(40*3f$%qL>;4DM+bKoKL[Qib<+%,9cbQE<L;SI');
define('SECURE_AUTH_SALT', '*,eXD!rsB,!`E|ovtZiR:?e5]2GYz#2lj%#CGB3E2{J |!fj!mbd2vsl|_<DYO1/');
define('LOGGED_IN_SALT',   '5T$8`bso+!`jTF9[NPu 77r}5&odSLit`<-w9^<dR:gqdv! kWa~<[ =Gj![j^+*');
define('NONCE_SALT',       ']=Mn2Z(L-1:gW 8+LX(?=V{|XE#bkEikVfX6pAZri8kV/ArA4!4cmmQ3mJoj?w}X');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
