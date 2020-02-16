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
define('DB_NAME', 'civilan2_WPCCL');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'http://civilandwilddesigns.com/');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'd1ff0cc6dd643adc61b32eb5c83f99de9d87f78eef4e72a134cdbf5baeafa54d');
define('SECURE_AUTH_KEY', 'da44bc483cd67c14d5d9f28d5f4c3ae168d8ce139c91c68583667adff10e1084');
define('LOGGED_IN_KEY', '29c423b649b312b93a15ec394bd8ce41ceb28d4e91e39b3d05e635a4f7311c08');
define('NONCE_KEY', '716c2db6c539e819d181dc0b93742b31925acef1185736c501aa8e32c5a5f4ae');
define('AUTH_SALT', '7449df1fa608b066da50c034ad509ca8787fdfb847f7ae158ee378c21e87d3e5');
define('SECURE_AUTH_SALT', 'b4cfaccc4e2e3f9a7237a623c2a34e7d4acb14f1c3c99f5a6a5c879fd9d9ee62');
define('LOGGED_IN_SALT', 'd786cc56cb54a3d08287842ad2ed54c15e50cc8efaa8a115a344526a0d504312');
define('NONCE_SALT', '80a148823a893662a8ebd11e66ca65d1e20f6d239f546e58edda71bdc0c39f37');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_MNI_';

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


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
