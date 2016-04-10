<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'halospai_halospainv3');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'halospai_halospa');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'WlBYr1L9y98i');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '*R+3N0_/.xU,$|2|[bw@q=}/~k%mYpu9`]8J//|V$=sHEirODW{;]u`FB+66ZV`;');
define('SECURE_AUTH_KEY', 'q`oFQ-l%h;VOI)yW$oUv@Jclk%@BaL-|YF7ND:o]-B&@wb~A[XN/ct[hw&GEZ?Vy');
define('LOGGED_IN_KEY', 've|4@L~BC<&+7a9Tc|U+p)bQMRxGs>BT(wOtppqT_Aq?][D9[440j@$Fqqi&nR:3');
define('NONCE_KEY', 'KAZUy{#N5kY<6gt4Y.z/oF?c[-!3@;G1-e`q9l]j42zNVM/>8#+/m^v.u*+n6uSM');
define('AUTH_SALT', '^[W_tmt3uA-4|kR2vZ6~r~YFz%!EtKW1{Wo(8x-vlITK-D;p@~|kq>mIS|nq1. d');
define('SECURE_AUTH_SALT', '5/wsf.||!;hjrrEr-zmk{t*XUg)3n|<%6vHbYUCHvSRnxPiq:l;I]+6:UWB8wv@&');
define('LOGGED_IN_SALT', '.@9Y,hto2 8DeA|Iay<rx$Q8B:1e($BMY3Gt_<#H?Hzxi~r>q!lO0Re6b-M)$${F');
define('NONCE_SALT', '4!yA}dN|*rnQ%E;sRHF]vBjb@Sw2#b=$BQ@+f%Wv_Lqp&s9$75&v+fY`KcFw8;xr');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

