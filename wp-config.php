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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         '(S^usdV(i+7?a9(of4KW`G_Q:T&^5^Bs%RBgDD%?+:sguh]R>Y*ok_~V22*3oW81');
define('SECURE_AUTH_KEY',  'DC(mqByQ:F|;fM(WE3<7rt0Atpcy&?/HcIgE:/@!C~i@L~iayDn$F6e#;xy9}(J/');
define('LOGGED_IN_KEY',    '-:Pka?3=0c$+EKOt_~s#/<hZf4e8cBRk!(K|(8yM$HMa=nR~Cb}m|6Ub]ZiE2i-a');
define('NONCE_KEY',        '>WQ#U@t`c}<`}(Yo&?Q}*[wXvK35(iY}*4mAVvq{s}2IH.[OC/S6Y1>mwgdj7SLS');
define('AUTH_SALT',        'eDno?25Xvc/beZaq5jeTY~?J.1{a<kN(8Jp`qD}Tr9nM~eU5Oe?5J?u([k*Vn$Jy');
define('SECURE_AUTH_SALT', '$54hT[X12$ab zO`8Un|nb-aQ5`=_,v@3tlcEP|F6ba)*dT+0.rZAW @Mi[/+}?|');
define('LOGGED_IN_SALT',   'W>=%q:RYgFU`766.7#br7715DsLA S~3`uHVz#DnFH]{+d;s+;D,G@uMGbCTuFkW');
define('NONCE_SALT',       'Q1P@iBaPYxqe7jyC]EpINXO=:N66!*Z*a5{nxALzOQ!W>}?h){$B{4e6:jEL^^|t');

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
