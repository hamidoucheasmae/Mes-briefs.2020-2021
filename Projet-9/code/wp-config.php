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
define( 'DB_NAME', 'site.ville' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'solicode123' );

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
define( 'AUTH_KEY',         '*>4d_)(=VRf7A5rSXV67p[ia|t[?46349+>oTjWFGAiffk38/caCBHM#m}vmZpQ4' );
define( 'SECURE_AUTH_KEY',  'g{}%uqR-oqSgy{<~cnGWn:bD;EwZE;hdl4Od=/guBvzTzSAnu[&_t=MX+.-),wPi' );
define( 'LOGGED_IN_KEY',    'p+08[y7kH-SaK-PK(!]}r{VlO&WOSz=q0p9]KD3V+U0? =V2yNh%..RsFFCooVLk' );
define( 'NONCE_KEY',        '5lbV2kYzJ$b8<7NA!tN<Zh$)tEn~5]r&gyT)Mr?cg%:9)a(Xm>vu@BG8,,Y^,Z@C' );
define( 'AUTH_SALT',        'G(Z}*r>;FUqr~Tyk}loy gri3#kkE^rxAT%0>B;qo)N5<ds[_L)WaX3J:r/H~>@Y' );
define( 'SECURE_AUTH_SALT', 'mag6W6B5+W6n{axR5kbRmd:XX6F9f6AM2($4fM7O8F|3w6(C4z)Xbg2h}CsB}o%-' );
define( 'LOGGED_IN_SALT',   'j]!*& >`k$nU.jA0s^su_%g?6O1u<_BCQK/Yk0h3@Nuy4K#l7eeb,Dv/BVuEo!?{' );
define( 'NONCE_SALT',       'W>~uJLP@0xt>-4kBHt6[EFI~ONXPSO<e}n}Xp(YEXf7CKrlGk.TziS^e. (*Sh>d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_site_ville';

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
