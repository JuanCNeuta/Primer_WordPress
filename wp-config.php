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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nuevabd' );

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
define( 'AUTH_KEY',         '&S/,)m#vctf!)Q X#^@K9+,bJ]o5t8dL94_W:NcY,*v2[zvrP![%IlV5&fu}o#lM' );
define( 'SECURE_AUTH_KEY',  'Yx4Y<@-H=O{hi2@#[&EHIpX]<z(~b..Gv|2@A-or#mpeP)ndDMQs=|tku0eI`C.3' );
define( 'LOGGED_IN_KEY',    '+C<AKmhu9}9Y6&,7Csr?.WzBV#Qkscg9--c>(sl+ndanV?qx4$9G,D~){y3LcDO]' );
define( 'NONCE_KEY',        'PfQ(phaTA|i-]_&B$n*poa}M/H!{?w!9uDF6,Fa6nKD7kW4r>=S=q:9[sOFT!}KD' );
define( 'AUTH_SALT',        '1/;DO;hl@cT~g@f]+,2=CC{BY@$d2<j&dC3`wrRR8irEfC3=otPo4,u;k.1R$((}' );
define( 'SECURE_AUTH_SALT', '(|wzLm28w><-0&IB~2g2ubHOYR8Q?6-W~-0xy:]SWn48^hwjO2Y27Zz}lz04]H16' );
define( 'LOGGED_IN_SALT',   'x$K{3@}/##0o3SgbsF5w}mG?+.Z8<dc3b6cR%U0tCHLo}_4IeJ>$Xp+0~FWk+gg<' );
define( 'NONCE_SALT',       '~5EyN[dEFUC_ak;B_SjbL1ZV,aLF/zz8b[,V*Ta(7x/.%r*FUcrtd&Z|]4r=wQTO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
