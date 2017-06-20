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
define('DB_NAME', 'emails');

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
define('AUTH_KEY',         '=>Ih&e0WqG-$0ct(/iI,xq29}b,|[>@s{4o8=K8ENmL:Q!SVyOzplhN$u]is4|sx');
define('SECURE_AUTH_KEY',  '@lNy^l_v3w8y{w;64(wJ2WzW^A;7c>oy/@t<-UO<E20MZnsy;U73^lZ:Paw<9)Te');
define('LOGGED_IN_KEY',    'U0 uo9w(/ji-9`jvf> yx%LaM|8^?5dQYe_F(%A,*reR1AKm&TqU[2j#EG^V1[W,');
define('NONCE_KEY',        'L9Tu<|!F@hReC)g3)6(r/L^ws?}LXu`#5rW< p5Obv3MozoI1;{OZd9MP-^-rjJz');
define('AUTH_SALT',        '=]mNArQcGAJzIW)P)WFB}PCsLKnzl_8 8gs(rtq*;#bGTephD`-3D{c~fp%u/E~e');
define('SECURE_AUTH_SALT', 'LE/q^(*S[;:;{2$m@iH!>oRmK^F,MYCwpoM(yH9-{Q$~iU-@9ZE PU_Y#kLrwx}d');
define('LOGGED_IN_SALT',   ')_M@*Ap-]T qpwgS[x,/3szldF7/%}N|bBg@k!%WbWC+;VC~Zd5xA9ra>1)Y!B3h');
define('NONCE_SALT',       'kU?-k0}[-<,Bh-s;O1!NNMJ!#<HAP<p1hA&xl[o{y-x857| mzaVrW_r3r34c@ZK');

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
