<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'sample_blog' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tu8]LkCA3%C?+7bXC3A#|dwra4/>4UA+UkM5esJ=]b j0xiGlE +CLHE@ tH#}Db' );
define( 'SECURE_AUTH_KEY',  ',@8219% A VI/R[4 6k:g6rj&,U.@<p|ENCUjdB>>&$yDmt=m?})mz*u<Unm|%(e' );
define( 'LOGGED_IN_KEY',    '@YR7$y*]X;m;|9~5}CkK4DCbC4<X4I5f+h}[S*.>2<p2TDl?ha%n!QXD,Bn1dc8I' );
define( 'NONCE_KEY',        '{2#.BOBtb)P]BS=8}=G7$8j>R*`K$A4+N!<r%s?We,PdYoJtntYyf&L%/Oi+o(}w' );
define( 'AUTH_SALT',        'Y1(Fa~IvN;Y(6>V@/P{C0 zqAZqOaDHtO51w~|!U~Ga^Tuy:2wR+=SlG`jUi1Nen' );
define( 'SECURE_AUTH_SALT', 'm6up}i_|YB1Q}$B^XI0A*A8&&@GV`pnXGS@wh<s_Y.,4j*)HD,4R8_Mk80FflC$g' );
define( 'LOGGED_IN_SALT',   '`Hn.vX}^xC|E./l-$# F0,dP-|1<Go@uOsq[b0eEc?Ba;8>i}NH8hh(=]/ V+/6e' );
define( 'NONCE_SALT',       'K+0H>vbq86+Ea5MP4~MKl~n&jBXGu,w:wY59Eca9}qT)NvZQja|m-+([qoLj);PA' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
