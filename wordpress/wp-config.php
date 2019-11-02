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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '94adf12562ddf705fac955408231511f6896509f13236e78' );

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
define( 'AUTH_KEY',         'f#C<5]mkRHRl8JXuq6%+cv,=w~o@#FN{1(c$Mg~YZ3vq<m+.|%%loT6? MZQ5dhK' );
define( 'SECURE_AUTH_KEY',  '1nxqJl-4Zjb}c=t*`ec;5jOGznSNK*;E,(lA(/x6x1~Y})cm_I1d*HF_N:MOF_N)' );
define( 'LOGGED_IN_KEY',    '$;me%Tsk8>DZD5Q$P}@LJbo:1jL &5Pw9CSM_9jH_hzo5<dNZqKa/XGV]6cvl>zX' );
define( 'NONCE_KEY',        '9Iyf81ma&b77EsQ7Wcwk@0mt@1IiLolmIS_^pOBtGlMh(/B:*#oOadz_}UcjgS1I' );
define( 'AUTH_SALT',        ',.u~fM-2W-LM$AygDPE!24H~[u2[h@NU0,qT`#BT]|:2tk-uN<0e6`XnZ:~vI<gU' );
define( 'SECURE_AUTH_SALT', 'd:=hMh, ^y8o>v,fb~%wmFx_-;/#3ohA<?H:7m%m6:jZ1lpS@z~xh5k?%oLiQ7?u' );
define( 'LOGGED_IN_SALT',   'DGG_7aFTq/Rh/}nqDENfCh-E_C)7D8r6)k7Kgf^!;Bf<ft6HhF9^$io*#S3UVfLB' );
define( 'NONCE_SALT',       'b:RjaAo[jn~o4]W[(U 5LRv49m=-yHql1%L?4,=44M<Pa9D!MA94Rqb!6C##&dHD' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
