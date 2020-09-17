<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c%^;6wx xrmK:JJ@kTY_Y3j|.EdDi]MW^(^H|*-z8VBKcS)3 Xp7T3{2u6iI,}wq' );
define( 'SECURE_AUTH_KEY',  'd3b)}Ds8X)xbA<jh])|7GK~|GM<x`)SB9qZL|XH0v8jU?7035DE8t^E]??/?8tDw' );
define( 'LOGGED_IN_KEY',    'W8LN,12p/*iHQCDJFgOPM k%;vl_:=kiIG0|Lsa4%&UQ%{U/0p7emSy6t-83`r*@' );
define( 'NONCE_KEY',        '88,.b>+pPNTcV5cW!~nGN~)u2{&6dmb#=I.% |b/;QkSBs0+zD6_&@vt_t#lr_MS' );
define( 'AUTH_SALT',        ',#^;5{;9<UI!@llJp{-&me5#0WUEqX+d|8KL5..o[dmzTV9|dneVPL)LVJWBw|Nq' );
define( 'SECURE_AUTH_SALT', '=oPjN~^tgM!Frp@y-7v;v4]i5JWhz8<)gv4d5yH P?qZGoBAOjl!;2BUccQTeEPL' );
define( 'LOGGED_IN_SALT',   '9MEb7:@>.?Z)^k!Erk/0KA!<v=Ejw``>6x$J6YR]Auy9)c-)i3FN(q:YRw[TK~qY' );
define( 'NONCE_SALT',       'v]CwwWYQa)net;fKI>]WmE83}bAXjv`6//k|KzI-xF;L1ct*OxsM;6.UhN^l;:,c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
