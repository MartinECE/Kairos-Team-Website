<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'team_kairos_db');

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
define('AUTH_KEY',         'F-F`8glF{70iW27ZwoY)V[%8;@ zJ/c?Ck gPl}`iC`1Ad!KHvokFx@cw^uoIm!(');
define('SECURE_AUTH_KEY',  '0f/09U O7W@V=S=Uq7j!*b<=*qhj?3&1_giMPf8Y5$HSQ&p)v&84)_{n<M1XB[{S');
define('LOGGED_IN_KEY',    'nvH4[95f$a3$eAmfYuArdZBpK}[P:QEuO1*$XpPHMuCj)I+>n$%bc0h%S7K42vn,');
define('NONCE_KEY',        'io? @/vGX^bQPN:MmpI^KjNUE;x;x7-bE+2[a`4X`+ADHd,V) +:YyM^@/NwHqTG');
define('AUTH_SALT',        '_/WusI$N2d_.wI9+pKvu[)1}yPPZ|=>(R*Cf;=09RQ@V782[#>0g9QqrsKSQBd]x');
define('SECURE_AUTH_SALT', 'wvK)*.NK@J9=K~eFCSZ9m,Qa=%ZQQ7]3|%>/42/[LhBn24Dt+V5|`f Y_VJcVE;_');
define('LOGGED_IN_SALT',   '!W2kTxBR[97=)X;RzeGPDv)]WrNOnqDWw/%Bz?q[F=EKmTF->Z5kd*,|s 9:So?X');
define('NONCE_SALT',       'FYZ;N8$SV0/lb_uuM7%4I}?xiTcL9FxNY|j rz}IwCFPC_lJ}@B!xy6#C)B3D/0D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
