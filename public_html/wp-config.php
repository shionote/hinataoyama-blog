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
 * * MySQL 設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/xs127027/hinataoyama.org/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'xs127027_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'xs127027_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'hxl7v3cud9' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'A%9=mzH&?L.g4Y*,$3Sp}}x)IXn=}y&MD+N>4!r{2_?}]tYU }V5i|]-{$ae%9Y-' );
define( 'SECURE_AUTH_KEY',  ' R%}3sR^vUE<rlhuvn`c5I%Io:cEkkp:-=bZ&D);@SvSv7?+IRt`S4:8aMg54UmX' );
define( 'LOGGED_IN_KEY',    '@.$c%JDrQ=~dDca-L+-!^Js1nN1nD+r4RH^a,c366U/zIc;Y5E;z4S(^i9K+L4Z[' );
define( 'NONCE_KEY',        '&IYWxNk>RLcr 1D0cq/l3#:# f]Ycp4kcw+M{LqQH[F,s#h1-~>=:;g2/8>[KyyE' );
define( 'AUTH_SALT',        '|dYbef&2KIm~*-~b`Cce4(`)-=8s.cZJ=p|W{0fms=&zVxdPp  YPvhv5xY+$t~s' );
define( 'SECURE_AUTH_SALT', '7tO]4Wq|FTpStF>3Xqw]$ulaGsJwxrgz (ncRQki0.eI&^Qh-%EG,r5XU(QvL&9=' );
define( 'LOGGED_IN_SALT',   '@TOdVKH,j9xjMML>/ po,~hrO/jc/6Gf=ws7+,BJH7{!Fb+e#vPN*9m(,&`5R1ga' );
define( 'NONCE_SALT',       'S~`mrar09gh^a)9cj;^mb{MGl]vC3+}:*)q;u?NBQf=4(4:<xMN//,w :D`O Rpl' );
define( 'WP_CACHE_KEY_SALT','1:b},}GYI=/|;:W48Xa2)Kozohkn`-/h(rC`;u:1p+>y|<VmtC&sjuG|*O&&[AU[' );

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
