<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.gqjpmm.0001.euw1.cache.amazonaws.com');
 
define('WP_HOME','http://wordpress-1581890685.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-1581890685.eu-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c2jiqeih4eus.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '4D?`4PM@lZ9J>Xw2JcB)[}h}+O`U,aeOf%#0#g^PAMXk>%$BE#ISHgbg(TH<Jhh,');
define('SECURE_AUTH_KEY',  'PJw#HJ$gJJryQW#BFl/f+f9 h4@IZ2c+3I3FE;=W>*nVOn:ugB?Ba*:z5*UbZ>TU');
define('LOGGED_IN_KEY',    'n[i_nYMdbOlA(fB`%_uDYF7,VpLl#goKw)D$2u/i|YYKwq{6$+U%b.tR{B|tCje,');
define('NONCE_KEY',        'ORa{-?gbMP^@nfxMCg+8LfG?bdqXptx<trR{+ nc}7Hgc$dcn@&<+#]a4+WFw5CZ');
define('AUTH_SALT',        '%/jFj[0Rb44.n,#_sfA>hmtS>[>jIrJ3]aK$ctlKB7Mq}bR8 toO1={Qg,ST`V|D');
define('SECURE_AUTH_SALT', 'h<Th(]4m#0>^|wA$)-$i~Fa*IN+,O_YddzgEmgW8$.*4YZkjnJ[+q@+?*GnLQcmq');
define('LOGGED_IN_SALT',   '=!>>^z%RA3iVinKOQueA[8j?OX+6!HQc!R@!*BrXK,ZDV%_x%}[aIs:IE`SLMe.m');
define('NONCE_SALT',       '2^kPdj!.GWDn* VH,]9Cj.}Ns|JrnSajgE{~$Q),NR,Q6yK<]L+xLv28GA,XvmDr');

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
