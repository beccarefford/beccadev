<?php
# Database Configuration
define( 'DB_NAME', 'wp_beccadev' );
define( 'DB_USER', 'beccadev' );
define( 'DB_PASSWORD', '2vYZ6yMnT4afaQxdpxWu' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'N^CCqVnW*TSMPNc|n5&3.GHcq+wWIs|,M CH[k]WPQX~Lj>.2)Zt5[9AVG`W`G/+');
define('SECURE_AUTH_KEY',  'w)13,w>QeB)7ZNZG$fdH;:lgO,/rXqr~H),D8M1L. zk^[%t.)*w<.+k^d/p_!3s');
define('LOGGED_IN_KEY',    '-o:L:/I){wZ*hlds.F|1Dv6h^/(IM(m<P-{8Z9I+JsLQcop-LM&pDv:H+e1;(mDb');
define('NONCE_KEY',        '->0)$[SKa-TvqZ|nOt>blTl>mJSP0n>yc[p}k5b1tXg40T*rw>Ql`ju4`!h`[8Gt');
define('AUTH_SALT',        'bILt~BNP;>I~rTjaXoEW!g<~7=nqH.N^zY] -B@(c-u[$X2Xi<bSgmsSw%+1Z1gV');
define('SECURE_AUTH_SALT', '25>#a|2SN*@.L!>O+oC=uPm+Btfpi2sx!c+Q4K}Erf&f^3P*|bkq)vk?Z8h|s3(!');
define('LOGGED_IN_SALT',   'Hyx&M9<7|-Uk@ZaEi5Z|tK0VR7[&+Z[w|x7Y+vT(Y7GBN/dbrY/FEn7mmjqo@Ghc');
define('NONCE_SALT',       'Gv5GVIb7~7fe7:~_b{6HVs|Wv@lR[-8*0$e|G1wR@ELF%EIM%bZT*bD`<G<*3Ok,');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'beccadev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'd363e801f53c5bc8cbd0d188afe8463f24954036' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '40529' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.33.48.205' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'beccadev.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-40529', );

$wpe_special_ips=array ( 0 => '45.33.48.205', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
