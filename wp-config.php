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
define( 'DB_NAME', 'myfirstsite' );

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
define( 'AUTH_KEY',         ')C5v|^jf^0NBrZpG75n _w!W~!Eiz;Wf+}0&,5@)3%n?)Q|oZ=t_xbV$Mle}D58U' );
define( 'SECURE_AUTH_KEY',  'F6VScPCZy8$YkkoY&kyYM,`&%KBKl3=1T!liv?aLiFrJq$>?FW|Ey;k!xs:W)Yj_' );
define( 'LOGGED_IN_KEY',    'poq.vEM;uV|%-3ie6x!!~WXf2gs,b2HYtQWN3pbC/) <ZO[_&=HlvGPz:I90Z|Wm' );
define( 'NONCE_KEY',        '5~!%.MlR9eznd!ccX.p+>~gYR)($:Zo]! q7]tu7&M*PQHIKPl&tS]!)5FDx?ccC' );
define( 'AUTH_SALT',        '_+aPL^U]J}(![!(:^dn/A/,YJW%-_B_y=Uh6g;T+{jR}]<m(F_RGwhBbm,q[3A[Q' );
define( 'SECURE_AUTH_SALT', '2h!>Md(Lal:e RDn>9#Z5k[kHsdEN=S6bK{Z~0nIqz?bM5SpqeZ@$Yt;]SnuP`U{' );
define( 'LOGGED_IN_SALT',   '}Q}T9?}lgF|bjd2,3+Zl@u?$&<k#nOkGFSpkkiFf`S@^lx4$@>w[Wb|A~SB|OZB[' );
define( 'NONCE_SALT',       'io7blVN!zC_ukRN4r[>N3uJ&?N%hTgw[l]#%6J_{oUie1Et;T-zD6m<OA#TF/2C%' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
