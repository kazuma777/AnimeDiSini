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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'X:cTNns|Ku>`]|x==b`/jeA9}m2ODwhZ71_19,{[< 9<HQR:lHho?R)h2.bKu=Z4');
define('SECURE_AUTH_KEY',  'zZX~^>( T}.xgxV33U@Kl;(*6q8`mZ|>+[V[c=4TQ&3~OTwFZel^cx_Sg.GUZNA%');
define('LOGGED_IN_KEY',    '6Ct}z<BbQU&9OjDyUw|hIKkKcA(8`{5.DNH(6n!*;gIW&v]a] Bn2cjO>eZAP^z ');
define('NONCE_KEY',        'V/HA:>E5*gL|{JN!mp3mx>Ee.JfQF(*xci|zvt<x!6,W6 26vEa5d6$}E{oCQ@y#');
define('AUTH_SALT',        'rrr36*n+-R<EQwd:G1##C)=.:O[@L]#Ri}l*p9-[IPA+C]reIM$K+b8T$pE(GU!p');
define('SECURE_AUTH_SALT', 'i<Qw[Y*VEnm(fk_tMMMYxZsMp>gS_e/iu_ni+BVNl_8G(Xa~BPiVvNE):@5kDsv!');
define('LOGGED_IN_SALT',   '_So-I<}]uX5mNwGygUUcM.]H/CfXF=3zk4ahl$R5Y<~)`G$Gho=LU28ijfW@W<(c');
define('NONCE_SALT',       'fArhYa 4`ik[O^[.,3}A3Be@/t+f4+Jxj)R&s`yNOh9k]]%A]Sy&}]zxJq&-|;dh');

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
