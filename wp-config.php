<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*-7<ES7mR|%AB}fU3D}iX!x91~Ql(^H#}|lP`$*I<h&;:v-!&LAJ)1/7z 2}TL6i' );
define( 'SECURE_AUTH_KEY',  '%+u[[vj<j9|@T)T!:gpzn:wo}Ir#iWBqwT1)RR=tf6r!2Td[TQqfkx &qW)2_R)}' );
define( 'LOGGED_IN_KEY',    'q?#;2 8kd<xz&).NnSaBgF,Dn1[*:g1hjH6O;b]N^l?M+MIh(YfXl)HXW;HP>h.I' );
define( 'NONCE_KEY',        'XaSwvz38<_/^j-OR/;v^DawIp#GYGgL(a+6~`)&I}q<-Q3H56`BMyc)p)78,MTSz' );
define( 'AUTH_SALT',        'FP?ztkOfLT{/U0@Sv`<p*sY*H>.!lcF?=^]}`79PU rG<=&L&mU JIS>Hz@O[G7Z' );
define( 'SECURE_AUTH_SALT', '{x st8S>[4>2]XF(wR55C}Mb3[-YAR_>0j*4597`Tn-qN5;p]auOGRGr,NT!+jLm' );
define( 'LOGGED_IN_SALT',   'JkHaf=S5_,P@&YxL9aNZ$;pJ+x,49Q-Woj,qr7[jC%{&&PiiqD/(M~@! KB6__N`' );
define( 'NONCE_SALT',       '_aKmd|ia3q!Ek*OJ-G$49 U3X=_5UYZy{>+R}b[6h:#?U$WMHBJX7._XP|(iv%0w' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
