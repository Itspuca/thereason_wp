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
define( 'DB_NAME', 'testwp_db' );

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
define( 'AUTH_KEY',         'RUZFpt`X]`Elw;X>iR&i+?6UFg@:C<f4x*eJ~uj%;6Sl5no8pB&% IESqDZkJE|#' );
define( 'SECURE_AUTH_KEY',  'PDVNp=R.[VxB{(j~%C@cK?w08MP&yLrzu?SEy8@O7nvUY.s(O<+Pllz,rNh#4(7d' );
define( 'LOGGED_IN_KEY',    'uxnjHJb0Kz+Gt>W``W-b|{`g#q7^1Z:^+B q4d#&NuZgzy@dy8~(_~Swwe%Y#f#m' );
define( 'NONCE_KEY',        '({6TbBVTAzZzV|NEL[iX+G0of:.(wzrhSk.5$C`.nAA}pe+jKL=ty9iZ+!QYK-BZ' );
define( 'AUTH_SALT',        '!n: PK_}Mlky:)y]dMjWz+wy_XL]gx E?i7{u_SrsNLzRA{cyv{5#2*TENo8[QqY' );
define( 'SECURE_AUTH_SALT', 'afd6l,&UL.lNB2X7!HFi-6G[eC36O%F7K_opqBuOi$MO/%M.~gW0rg)f-kTP(,2=' );
define( 'LOGGED_IN_SALT',   't|uRL]9d;0(49H]M;y|Yw+[EH>PLjC5WfDgz4c0v(ePb><Tm,a~e{$$jtYsXv8#Q' );
define( 'NONCE_SALT',       '__<(ZU{G0?SO^0pg/h0Zr:,Fc7h8E1`q:wNB{@ Viz2d-+x{}xox-Z^3;VaDx5Qn' );

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
