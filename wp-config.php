<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         ':5D~teQ#h`[^D! 2OeCCxMK&U{<2G#f%T[<[z;6>$ziQAzT.*9)X2BS!o|N*~~)C' );
define( 'SECURE_AUTH_KEY',  '71@#+xdg]9+C/xL4[lgly-UP0QELM<b0F?OPop^sE(o}JySy$c|IeTr;^PrDk_bu' );
define( 'LOGGED_IN_KEY',    'pA^ DVgg/iS=j{l)eY2%t?%S.(+6Uag68v13u_28/2AC?![CO]T`k9P-L` Az(qD' );
define( 'NONCE_KEY',        'Bas)~;,@,QBlkw^uoYowO4!5Ddwc5#*`+[sK&JQonl~C*_:X.iZe)Q4S0>5wT]YI' );
define( 'AUTH_SALT',        'KM)T~!1-EmiE{dIZF>,KXuu-1~qjD.{?h(EQB{T?{VnL758<E(ogP+(S{ick?NQ4' );
define( 'SECURE_AUTH_SALT', 'DL_7E#J:?9zkPIz{oa).[csHQ1^s$!jC7r#V^@1/$&{$9_tK7Vmf.*UNYZ7La$X@' );
define( 'LOGGED_IN_SALT',   'q,lBOQxWD/WIyQy?R#z^Oi|~Xxro{B`H!TvMgMO~<|&f[k* }P_e[(Ae/EBq>+ix' );
define( 'NONCE_SALT',       'iRnBDaq@cU#w++n`+,4s:-@|B4&CRvS&f@t(J6*8>Z0l+3=Bj5L<*;vqy9ga<EnV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'hcep_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
