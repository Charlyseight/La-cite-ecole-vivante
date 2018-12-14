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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fEa74SnCW8+d/|rszsLcrb(vaB*=Nk8|q6~$@_E`t,KyA;j_.m;{?WM9RV!L 5#a');
define('SECURE_AUTH_KEY',  '_Hh]=ldmc/Y$/{(pkaq?GHuGsO;T?&;<wfM&}jVo`KU9Z/]`]vFNfILAn<#?nD0a');
define('LOGGED_IN_KEY',    's#AP32::&4,26mZ]<PdYGF&=s2#1)&1 yGyL{MZpfe?iac;jtheR ^ZH?(GD^a|m');
define('NONCE_KEY',        'q<&K1hH``kh{v/~hx(-ACCzjx62.B;5y*oR4z]%rfOI%FK0x;R8bWAv6bjBDF;tM');
define('AUTH_SALT',        '0wDYIB1Yit dMwb3^r_nS:{s@Xa>8mF;%iyY<yo;qLLa]070u5uyjMT5IM (8+p5');
define('SECURE_AUTH_SALT', 'a91U%1vTLGeu-xk& [m5+Fzb+?26ZeF^2Ke8YRA!.9HoE@i)#:VU3F@RAjHO:p!>');
define('LOGGED_IN_SALT',   'l-*{$VcOEw^H!LGqR$7;|I>phJO6!-lJXzL<(jdqTU>@*@PXnh(i. c7$fzCV)w3');
define('NONCE_SALT',       'fx{o^V^R#]P+./q$YDXWw:J!6m,JL+#z2)WZ2VhF+[MNN]B/h*pC=5e04~jO}V:-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ci_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
