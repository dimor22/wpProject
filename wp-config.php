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
define('DB_NAME', 'wpdemo1');

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
define('AUTH_KEY',         'BpXzSk-HxWeEf8v|^*:(ipzgF^m1T9bg|QE.wwC}de4a.>4LS5.uD<</R3=mWJl$');
define('SECURE_AUTH_KEY',  '0=NK%*D1N1aJ#X4QY1(=| _WY>[UqOClR.O#;kJT@$#;K7|?Q|h,GokByrW.%{WU');
define('LOGGED_IN_KEY',    '#R%wBC4)@F}RRV5CyBGFiB{=4C>H,Ph7TL^Eapso#]d+bW*vS#_likD/a+nOv{39');
define('NONCE_KEY',        ':PMY72KVY@r$&/]*+Fl>${yr(},BC5@I&6O$_IK_*4Q:c]dy=:Q-k@`9vbkyWX{P');
define('AUTH_SALT',        'Nj,q/}/~vTmh@[:}ZkfanI)atk$,Lv2)?k}.2YQhfNZS_L1F<y$3k:oTNO#w$5f.');
define('SECURE_AUTH_SALT', '>`r2nL.I5mLpUCXe-PDk1AE)ePt# L*5b99Q3Nc1Q$:X.?ApJ~8aUEf>dcx89lUb');
define('LOGGED_IN_SALT',   'h7M0GZbH(;aSS4*{k2S;^[8),}h`o-<#I>fy{!D_346BQoICQ*kcTT`6Vz^T3&m6');
define('NONCE_SALT',       '#Z1fLg<N`q]_0>jL,fU$[Q&/bPuuP%JJ*9huAl.W l@<r?.#*je+$_3@i$yX?@Iw');

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
