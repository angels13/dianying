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
define('DB_NAME', 'ngmapco2_wp316');

/** MySQL database username */
define('DB_USER', 'ngmapco2_wp316');

/** MySQL database password */
define('DB_PASSWORD', '66!(pGSk68');

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
define('AUTH_KEY',         'gmqzdetisabvsehnzzvuroz8ldfnwypoacrbfyz3vuey5yarosqh3rsiigc9selw');
define('SECURE_AUTH_KEY',  's5quo2lg9ucxvkgltyuekvkm8yutmzfubbnymrsg1wak4lwvuyrircrw7chag4sb');
define('LOGGED_IN_KEY',    'spjhfdqmyfwejrqrsg4fmksxrfys9f4wb0uxqr34hl2wwbpssso34zqhhwawt5pb');
define('NONCE_KEY',        'zomnmuxku38ygia6rpyd10owqrdfaelchf6pjec52op8quojieh1ckgp2iqvhedq');
define('AUTH_SALT',        'hvufh7srjky1ej2wiiyfm5ulgcsw4kclyrtsjiiiaed0wg8mdqzcs0lucabojrcv');
define('SECURE_AUTH_SALT', 'nuogppdtkgog7nlxbxwd9amqkqenqj2djbz9eh0as77cjot8rho5cu3hulpw0n6w');
define('LOGGED_IN_SALT',   'tegf4sbpg36sl1yrcihfuucsgetnszw1mcujic2rnyckfdxayw4r0quwqgvyuip0');
define('NONCE_SALT',       'lmg3ildeg5abq4sbsybvhi43y618vhygxgncbps7dtty9vehby3nn31hv3ha57xb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpty_';

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
