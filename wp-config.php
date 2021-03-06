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

define('FS_METHOD', 'direct');

/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'emoxa');

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
define('AUTH_KEY',         'ii@|]ri2%d&J){b9@Akp2n/:p)f,Z[ohjlsdY=Om(+u?z2bHYrNPFoa.;r#T5r<I');
define('SECURE_AUTH_KEY',  '(d|2`%-a*M ^2@+~c;CbC+@Nx4b<SO(q=k`3.(:3-^AgSxS3{H;&&+|BLl9%4~}t');
define('LOGGED_IN_KEY',    'S3s%^1>QqAPh* wR=.c>Kqgkl/U@J&tKGHXCk3KtolyNZ]/R1op1)7$& Al/Eyyt');
define('NONCE_KEY',        'g[[f|O=CZ=JBn,glF&}_z5gv-Ra$sOs`q9`j[21L)4>=do4X^jR]E>%(~/I4ST`A');
define('AUTH_SALT',        'de81uV/8+T;2kZml{)(nll@SAm&nOrN6L}v-CZ!Ih>jZrEzXceWIwBe2!TeO)czG');
define('SECURE_AUTH_SALT', '{c_XHmPX&Fd:Vz8M56GCy;H:Di]h7f2`):p^6 [>,x:2rvcNxT/CN&O0IAZ7B67^');
define('LOGGED_IN_SALT',   '@ubTg)|:lD-^~7K]n|:~/=}Cqfe8&stj3n!b0P{`_9=g,)OKCuKFAC7A|.2=z3UR');
define('NONCE_SALT',       'fx3L!MzI2nYZgns+uJp?.?9La<;s=R>X<UvnRNq=;5(tO&4dwl=qT0LMRO`]i2UV');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
