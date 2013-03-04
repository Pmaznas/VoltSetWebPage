<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'voltset_com');

/** MySQL database username */
define('DB_USER', 'voltset_com');

/** MySQL database password */
define('DB_PASSWORD', 'KeBXDt4g');

/** MySQL hostname */
define('DB_HOST', 'voltset.com.mysql');

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
define('AUTH_KEY',         '$*Tmk+ 3nPAn? gDg?io.@GKjSCEVNXZ<gkHulneUN%-/}B*~G|D;6?!DY:0h.6^');
define('SECURE_AUTH_KEY',  '[?|,{7z&kU|C[7N |}{ O7<}Y:HWdQ6PCC2|@<t2YaO>_>kRSNhEdeXCsuPr5Rvp');
define('LOGGED_IN_KEY',    '[xpHg(eajNzbRpTc{n5(vXCJ7JrF7+-w-Ndc*9iH|AT9f_ik8K)|Few{{({we hN');
define('NONCE_KEY',        '#-41j35+N_D9>BQ+2VBzJ0(OW<l+(JmFEO]|$Fo|l3!c42%7dN3y*/&Bb@/l(80X');
define('AUTH_SALT',        'I<Te_-{MBCvV<Hu%c)v&WUy*s]2XNWeZPpYmYS6v%d*S77:F:g} IvmTT|UM!wr@');
define('SECURE_AUTH_SALT', 'NsA)s0brPfn?KGfR$#Hzy[hl kT:<t4eJ$..EI*@q.=,soz5@pU-cfh@:|4+s_Yt');
define('LOGGED_IN_SALT',   'Z!]CI|K~OGJBG/M3C&^Ok8,n]`sY~.uU zv8#d|Zu3O/[p)P_%{iJOTOH.UIn1$Q');
define('NONCE_SALT',       'AboePE&/d4`)<|E46R$-=r)1!5/F^jAM%ywuK9,~@O38=K+=)O2^qL,7<M.5b</y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'diku_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
