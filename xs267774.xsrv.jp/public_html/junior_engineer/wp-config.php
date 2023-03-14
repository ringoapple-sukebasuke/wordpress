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
define( 'DB_NAME', 'xs267774_wp1' );

/** データベースのユーザー名 */
define( 'DB_USER', 'xs267774_wp3' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'rym8yzg2bz' );

/** データベースのホスト名 */
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
define( 'AUTH_KEY',         '})=q}[E)( >;n$fTMZ3|B-]?J2mGO*`3UV<FSZC{P>rM PO4qtA@OvVfIlX,9M{E' );
define( 'SECURE_AUTH_KEY',  ':+[^X}[ 4DeBtCNI]/Sv<OQbRh,{VjW{CXRak0|DnBQsM .c6^up#NO/gwC)7JVC' );
define( 'LOGGED_IN_KEY',    '(R}4W,t_v&)}iVjXE&U%7,z1GEJq^X3DQsm[fm;:r21z%H-0cO936L+4<:F|w{W{' );
define( 'NONCE_KEY',        'R @@i1IO_(fa2)^5uk/Beb-(/;nDPm5hLI{>S-L=5d|9Q7)BQ,9f:oP{9Qj|HSw6' );
define( 'AUTH_SALT',        'wiB|_a_ib7vl7(C*yn^dm=,X]:k>E;HT/6IKm`R>hb1A(k%m2OJiGBH0=PT+<K[E' );
define( 'SECURE_AUTH_SALT', '[ycL+s=$}A7v=LSE&FCp |hC%yba:2A[O+r]N9L}l<IEm@M_wILfn!X0}LOJ~&7g' );
define( 'LOGGED_IN_SALT',   '[w9^JY&^3=,~W7woR8bUmc[@-Xi.(9WR_{04X#g2yh2?zmp879iS*Vu9iZZUnC`&' );
define( 'NONCE_SALT',       't2cpMV(KW4|ByS57 GM%9QMH.s/yc>UNeS=MpU8*6TTPTog>lzB;[sIdJv8Z&;S=' );
define( 'WP_CACHE_KEY_SALT',':m?uz5f* 5}`7`d1Fq&NIC5=8#_c|L8ovl;6#8T-X?0z5u;Ldbwvj||TJTc0iK7A' );

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
