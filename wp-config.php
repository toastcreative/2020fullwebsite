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
define('DB_NAME', '20-20_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kWqx!ow#sOS^$$>jNRz^3Y^7H5Bi^@0tMQlanT9{/))ef0Nc?^^S5ip_v*(*l{76');
define('SECURE_AUTH_KEY',  '2Ngmd|~,X?Sbxx&}~vL`_IxJD<0Khy3Lzi_1B#8~RST7.?&:5fa^n8<}.!@%*E(z');
define('LOGGED_IN_KEY',    'wcm(8r^{b^|NbdidJ:(2YRWA8LildG^*i+YP:T!E1%}~O.(=7zEYB/tGu&o&}z>E');
define('NONCE_KEY',        'QlB(&r(PKdCf.?b|tpny43?mb4b0>V<mg_C:aha6-+2lt<&fi`K63Rs&YOHd3eRv');
define('AUTH_SALT',        '(.`08_`azS4*^|TtL;p_?N*u4jSXe.Gq^/3K0I$UM6b[0GQwrK@BO:OaA#[&4YL0');
define('SECURE_AUTH_SALT', 'm%Rjx9E&]pOyr{v&4_bRu_>In$^!_c@9OhRNvC,X68X71,Z;e+JG46w$~#.B|]JR');
define('LOGGED_IN_SALT',   'JF`iK]GqR;VzCk{9dT{C1;aiw3d*otmqQIR5*GE dY.0|J6iXr`<vO-GrK>7~KtP');
define('NONCE_SALT',       '.8!bp*1cNYMq3nxA>@Rg0-e<=YQ~?bbo7ldv$Kyd2(?:pT!?,i&Et:y4au<r.(X%');

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
