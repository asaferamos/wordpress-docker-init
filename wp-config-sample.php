<?php
define('CONFIG_SERVER_NAME', $_ENV['SERVER_NAME']);
define('CONFIG_PROTOCOL', 'http://');

define('WP_SITEURL', CONFIG_PROTOCOL . CONFIG_SERVER_NAME . '/wp');
define('WP_HOME', CONFIG_PROTOCOL . CONFIG_SERVER_NAME );
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define('WP_CONTENT_URL', CONFIG_PROTOCOL . CONFIG_SERVER_NAME . '/wp-content' );
define('WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/wp-content/mu-plugins' );
define('WPMU_PLUGIN_URL', CONFIG_PROTOCOL . CONFIG_SERVER_NAME . '/wp-content/mu-plugins' );

define( 'DB_NAME', $_ENV['DB_DATABASE'] );
define( 'DB_USER', $_ENV['DB_USERNAME'] );
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );
define( 'DB_HOST', $_ENV['DB_HOST'] );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'DISALLOW_FILE_EDIT', true );

define( 'AUTH_KEY',         $_ENV['WP_AUTH_KEY'] );
define( 'SECURE_AUTH_KEY',  $_ENV['WP_SECURE_AUTH_KEY'] );
define( 'LOGGED_IN_KEY',    $_ENV['WP_LOGGED_IN_KEY'] );
define( 'NONCE_KEY',        $_ENV['WP_NONCE_KEY'] );
define( 'AUTH_SALT',        $_ENV['WP_AUTH_SALT'] );
define( 'SECURE_AUTH_SALT', $_ENV['WP_SECURE_AUTH_SALT'] );
define( 'LOGGED_IN_SALT',   $_ENV['WP_LOGGED_IN_SALT'] );
define( 'NONCE_SALT',       $_ENV['WP_NONCE_SALT'] );

define('WP_DEFAULT_THEME', 'rede');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
