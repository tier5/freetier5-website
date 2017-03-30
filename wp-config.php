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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freetier5website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'prBj?_xut`AF1xGumD39|y%X`WZ4|io!epULz&||~5Y:A3=V&_f5[L8<jhvK$VZ^');
define('SECURE_AUTH_KEY',  'HxGjOQF~%F0h=B!{.-;Fu$b@Y!$O|$n?ft=^=JIyxT@Vf2^asa5dzfQs687`H+>-');
define('LOGGED_IN_KEY',    '>,3J.r%eKPF?]>pf,Cd`4;L--1r~-Kd&SHN>QJTPOFv|kqVk1v:yLysku(1i]w.z');
define('NONCE_KEY',        '5SdLza-fArHQav 1PEpR)C/ [i7(l~dOVYP|2r-_#AKaGR:-gpqlIQyL>@~b-S98');
define('AUTH_SALT',        '|cM?~?}n#gIkJWMaq6?{2@#+10*[1T=/aIoy7_#[7~4mX]dzhecQ hwss1gk81P3');
define('SECURE_AUTH_SALT', '}l]eMZ5tI1/W@mI/]NwbD%bt)*jh]:GIJ|`GNH#ow>-t*g7GE)>T7|._Po+PVhSA');
define('LOGGED_IN_SALT',   'b(0=|6ws0*+xDvy*5A@/X3g+Yx3:./no`]V|qifvT>>+Cl|H:%,m+2fxj^<S}FgV');
define('NONCE_SALT',       'qI&k&nO.Mi~R^jS&ppMW_L*>C`i4Q7;z7L-R|qYxNGL7!C~+5=`WN6VcS9zY-N!F');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
