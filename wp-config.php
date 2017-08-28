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
define('DB_NAME', 'desafiolatam');

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
define('AUTH_KEY',         'iMzt0%I,+P4#xwe|zdXp+f;2P;/~A7aRyrtR9 z-4Fuu~dp_epjWlxy1;(I.:%*P');
define('SECURE_AUTH_KEY',  '/0OOLso%G~9!{a?NPN)C7e2}dna@:Nj$rfD%YYQdh-E>w@7|}H9cB5Z/lKXQqm4V');
define('LOGGED_IN_KEY',    '1eT;K@ =GX*RndM9+P@Xvbf MY|(V6*`<< @Nz@M|r,6C5P^%ih{#KI3wiv#X^nT');
define('NONCE_KEY',        ' hw?QV*LK3N[i3|Oz^}Yi- 7($N ywNx&.3ZS&:djB<2l5$-:=X~|+O7!E 7v)WO');
define('AUTH_SALT',        'T_Qu|?oj8s,V|*zIa&=BkaET9:k(l8n/|RFqOvr%J[mh,D^;VJeda3!HoxtJmqV?');
define('SECURE_AUTH_SALT', 'ol#g3$Uw >WTpzn.Jj^*/,NZZDat=#]/1kWLTw_,Ax6-]rG&E!uHP8Pj(CvKYSm!');
define('LOGGED_IN_SALT',   'S;*#WY^,,gy!v=$-A$4ki^dR<#:cfLi~;N/Hu1U`mer@03Gpt|Acz$^N!A8yqm&g');
define('NONCE_SALT',       '#0R;pu+pXYA4LkkIr:d(x5gh@,fPL]g5+UoDj?rdk<<1yAVGk65zI1ce3m0N[tV1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
