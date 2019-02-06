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
define('DB_NAME', 'techthirstie');

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
define('AUTH_KEY',         'G#m{<|g%Z4$)mV&wrPB5S*/ @iEK<c>>Jt,oxLE#YX?39dLu^-uo^3o8d:@>@br8');
define('SECURE_AUTH_KEY',  '`0pMx5I4VD~[ z ~tS8)>5:XjbB>D4K<kwKScsABK&|f%@Ak/H<X<o(~bk6KD@A`');
define('LOGGED_IN_KEY',    ';2-?=[#=>!otdFs&gKe)-OsuPWYw$Eod{<(:toW2ZtqUZe.zu:qlG81$A&=lv0^~');
define('NONCE_KEY',        'k_sqG}$5lJfm *b!kA9f;KZ=c2u6AMj?7qlt9vNmhcv,{Tijt/&/6]qU;9)[=(Fv');
define('AUTH_SALT',        'PY,P>,xDqMQK-#(1f{34?r{2mtQGKQ5A_IBge*?78Stp`sWf >Du8|p:d,}din)*');
define('SECURE_AUTH_SALT', '>5v$Zx]c,R)i}UkN<Jg[^^Mn<.k#V:clby~Obl|B_{r|6h^!+Q}yWo[s>#UCt<yg');
define('LOGGED_IN_SALT',   'iDr0Vb{SQtp*uZtPp?(~IO$#F4P N=>c5<IR^xfj<h~.D)t^kcdS4xAh/@52z7^b');
define('NONCE_SALT',       'Y|pl~?Km]TkI]L+n ZfR)qWRYVKG5ZmSEP>c0+|@ >x.VWO9M%}p>BxlYo2.pMuJ');

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

