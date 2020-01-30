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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '{2k,,E F?_rEZZ}7{Q%}^#rEj:E.*X.910<$1E(W<Qr{fM/HDbj+THC>&5m^r8t9' );
define( 'SECURE_AUTH_KEY',  'nkz{PK`sL^wV[X1=i,_=J><:v6pHHToyILM_F3}}uz^[-%:RFlo%H!%;mCR L&F}' );
define( 'LOGGED_IN_KEY',    '8<rduEcw;Q0E|pY,3E|3Vbwe3>t{k+%=@63wup9r#Ls$z@Sb9f<!R,OM(_#JVuNY' );
define( 'NONCE_KEY',        '5/;*kHdov*8D9NWrhW.TnkA>L$8cA^`TNax,d5~O#RMWf]<hqQ?KK+jjJG6*%XO&' );
define( 'AUTH_SALT',        '-2qcSO:B+i2h!`SNG}pny-J[IaXKHng5v4-Cp%Am~F5QIYPBui14*48l<Y!#Ist9' );
define( 'SECURE_AUTH_SALT', 'OSNfNmV53LOw>T!t:~x5n$stU75h5W2+17W]]npD:_.L[blmdW)xZaV*2pk?(PAd' );
define( 'LOGGED_IN_SALT',   ';]:yPD/^}(w:e&:tc,<:BN274=:vT^$#?~F,#&KH&ZXM|e1z+gFg~p() ,jJ/klp' );
define( 'NONCE_SALT',       'FQfB&(qO4cS~+;L(l<4tw8ec<XcCP+ V$P6)F|>,=*txo-YF^E}yb6?{r>OoI,}^' );

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
