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
define( 'DB_NAME', 'swworld_db' );

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
define( 'AUTH_KEY',         ']|$EC+9wYIZ>Eo=Zun`kfq3b*Z+unX53/POO}{OOrL*UZJ,pT/S8_0K|m|F,<`HD' );
define( 'SECURE_AUTH_KEY',  'l-w 9H`{gP/M>2%..*M7)%x2gN*$OXHI7CX`)j5YMDIk1x@aQ94;573d^]WxzZjM' );
define( 'LOGGED_IN_KEY',    'ie53P1~qq*Z@{twply;}]X;bUXR7o[nm8*`Kr<l)shK3A(Bii^q* P:MQGhPQLx5' );
define( 'NONCE_KEY',        'SwNT9!QGfE2 sLUgSO>lC6&U~*bL2S4n5Q[7IHo*/,{]fJgB<@/$s-y9DH*gx##P' );
define( 'AUTH_SALT',        ':cpYj&gWe.sK<QfT|.X&G;VcYl,!`WyeM<M9Lw@8w3I-hz~8U_og2$qY:xSsrRqz' );
define( 'SECURE_AUTH_SALT', 'xOc} :K4=4|?$,EJ:G4,(XeAz2)9G&y?SW<71;-{+D)s{DF3K[mI9@nD}GdaVnK1' );
define( 'LOGGED_IN_SALT',   'k[jF5T@wf6HIRDe%Q4xa)j+KC6<>OFp=H*wV >;  od/FXrC(&Lt#WO_[`$ V7A]' );
define( 'NONCE_SALT',       '}E{ZF<Lw&sG6O;`1y|-F}Q0;-JOv8OfL#HVD2FJ`~gFTBcxM&&12Wv;0Rd%<;X;;' );

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
