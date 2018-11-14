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
define('DB_NAME', 'blog_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0HJ|wWX=c1$mh]Md0TA8TDup{IM.2aT%:ZV,1@J8ubHX91oFIp9r~|XXqr[&Y^3C');
define('SECURE_AUTH_KEY',  'z`YRxW8iJ}s~z:+sg98{7*--|Gdd>/u^qNpL791 #$>kQ/dWWH1S)HVyg,;k@8iK');
define('LOGGED_IN_KEY',    '_Wk~~Bc`^h 18?X+liyaUUhr>k#*8pT9buz:u#2X`,4tXF>DE/1Nq;`xriOF<A/t');
define('NONCE_KEY',        ';p;Fr% dhTY{G-^(qHnA(|:pj{IL*X36*eouZOGA}/Hw]VYE1YQjw]ADCns%jDxs');
define('AUTH_SALT',        'ug<ka;-{buM.s;CF0XH1a_xE_. UWb^]nAUectm5X#LNBec1n[*2]tmuG0In~R?1');
define('SECURE_AUTH_SALT', 'k.T^4~2v6p>=6y#(ItMld:eQe3(-n6]1`8{O@|BRlfE9:*ZT?0[g<Miad>0x.F={');
define('LOGGED_IN_SALT',   '_1<T1K,7XZEuKpyY9s<Ka1kUfI0%Tb%d?TH-[;Ptg_fzV`Y/ S,=HFq5xs*?6o]^');
define('NONCE_SALT',       '-u`]|J6[m.xNV<T5&Vwp<PcA!!3nlellc39_,ElpNJ,7}=:udM&Vp`c8o49[fx-`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
