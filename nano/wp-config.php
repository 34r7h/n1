<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'N1.pem');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{*/GP2ZVtOG_aj|7$b2OWW|gf@JK,Pyt[ItVNmL;4).A!IFOqdrz/(zj_VU:99~`');
define('SECURE_AUTH_KEY',  '1bh7W!7dQ}ZNnHO8YA+isxGt1Lf[$rJP#-(Ql,4@hB5daf2gk2n`Ez%3EH7F1<$c');
define('LOGGED_IN_KEY',    'dDl|eM)LMCO6,=orAm-A%5/t2!bG4i-w4R^shSAX3u}jwVEQ|OQ@+*-%b+[Gv-_ ');
define('NONCE_KEY',        'yN_yZ{p9[*P?8T;mCo3^-*5xKM:cr.McjS]v;[TUfgfNnZqt}ooocYH4]Pvt,!W^');
define('AUTH_SALT',        'Ni*t1g ls82zu<4y%KA5+2,*$Wh<,{0>#s7Q8&kkzB.nkp*g_/25lDJht;Rrn?X6');
define('SECURE_AUTH_SALT', 'eZdPRY$Ww-$S(M]-A0W2G!!M_Vvn=m@/7(bSROfDKdQcQ{T5HG-r%S-jd?Jr`ov ');
define('LOGGED_IN_SALT',   'GxUsb;9,Y,Wiql^QXvlHJdR--pBEI`A?t*e{k#V4R`)~PRX_Oym<jD}=YPbDVRjC');
define('NONCE_SALT',       'z7ETxbn*_Xh=H*63boLSt~~&DD]|V]3n+*FQT6p.m}GB[ H>ayDYL$lVu[dm|~77');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
