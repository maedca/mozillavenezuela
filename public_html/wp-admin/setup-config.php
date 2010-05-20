<?php
/**
 * Extrae y crea el fichero wp-config.php.
 *
 * Los permisos del directorio raiz deben permitir la escritura para que
 * se pueda crear el fichero wp-config.php usando esta página.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * Instalando.
 *
 * @package WordPress
 */
define('WP_INSTALLING', true);

/**
 * Descactivar el informe de errores
 *
 * Cambia esto a error_reporting( E_ALL ) o error_reporting( E_ALL | E_STRICT ) f
o debugging
 */
error_reporting(0);

/**#@+
 * Estas tres líneas definen, y son necesarias para permitir usar require_wp_db() para cargar
 * la clase de la base de datos al tiempo que mantiene wp-content/db.php.
 * @ignore
 */
define('ABSPATH', dirname(dirname(__FILE__)).'/');
define('WPINC', 'wp-includes');
define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
/**#@-*/

require_once(ABSPATH . WPINC . '/compat.php');
require_once(ABSPATH . WPINC . '/functions.php');
require_once(ABSPATH . WPINC . '/classes.php');

if (!file_exists(ABSPATH . 'wp-config-sample.php'))
	wp_die('Lo siento, es necesario un archivo wp-config-sample.php con el que trabajar. Vuelve a subir este archivo de la instalación de WordPress.');

$configFile = file(ABSPATH . 'wp-config-sample.php');

// Check if wp-config.php has been created
if (file_exists(ABSPATH . 'wp-config.php'))
	wp_die("<p>El archivo 'wp-config.php' ya existe. Si necesitas restaurar algunos elementos de la configuración de este archivo bórralo primero. Puedes tratar de <a href='install.php'>instalar ahora</a>.</p>");

// Check if wp-config.php exists above the root directory but is not part of another install
if (file_exists(ABSPATH . '../wp-config.php') && ! file_exists(ABSPATH . '../wp-settings.php'))
	wp_die("<p>El archivo 'wp-config.php' ya existe por encima de tu instalación de WordPress. Si quieres recuperar algunos de los elementos de la configuración de este fichero bórralo primero. Puedes probar a <a href='install.php'>instalar ahora</a>.</p>");

if ( version_compare( '4.3', phpversion(), '>' ) )
	wp_die( sprintf( /*WP_I18N_OLD_PHP*/'Tu servidor está ejecutando la versión de PHP %s pero WordPress requiere al menos la versión 4.3.'/*/WP_I18N_OLD_PHP*/, phpversion() ) );

if ( !extension_loaded('mysql') && !file_exists(ABSPATH . 'wp-content/db.php') )
	wp_die( /*WP_I18N_OLD_MYSQL*/'Tu instalación de PHP parece que no dispone de la extensión MySQL requerida por WordPress.'/*/WP_I18N_OLD_MYSQL*/ );

if (isset($_GET['step']))
	$step = $_GET['step'];
else
	$step = 0;

/**
 * Mustra la cabecera del archivo de configuración wp-config.php.
 *
 * @ignore
 * @since 2.3.0
 * @package WordPress
 * @subpackage Installer_WP_Config
 */
function display_header() {
	header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WordPress &rsaquo; Fichero de Configuración</title>
<link rel="stylesheet" href="css/install.css" type="text/css" />

</head>
<body>
<h1 id="logo"><img alt="WordPress" src="images/wordpress-logo.png" /></h1>
<?php
}//fin de la función display_header();

switch($step) {
	case 0:
		display_header();
?>

<p>Bienvenido a WordPress. Antes de empezar necesitamos algo de información de la base de datos. Tendrás que conocer esta información antes de continuar.</p>
<ol>
	<li>Nombre de la base de datos</li>
	<li>Usuario de la base de datos</li>
	<li>Contraseña de la base de datos</li>
	<li>Host de la base de datos</li>
	<li>Prefijo de tablas (si quieres ejecutar más de un WordPress en una sola base de datos) </li>
</ol>
<p><strong>Si por algún motivo no funciona la creación automática del archivo no te preocupes. Todo lo que hace este proceso es completar la información de la base de datos en el fichero de configuración. Siempre puedes abrir el fichero <code>wp-config-sample.php</code> en un editor de texto, completarlo con tu información y guardarlo como <code>wp-config.php</code>. </strong></p>
<p>La mayoría de las veces esta información te la facilita tu proveedor de alojamiento. Si no tienes esta información tendrás que contactarles antes de continuar. Si está todo listo&hellip;</p>

<p class="step"><a href="setup-config.php?step=1" class="button">¡Vamos a ello!</a></p>
<?php
	break;

	case 1:
		display_header();
	?>
<form method="post" action="setup-config.php?step=2">
	<p>A continuación debes introducir los datos de conexión a la base de datos. Si no estás seguro de qué poner contacta con tu proveedor de alojamiento. </p>
	<table class="form-table">
		<tr>
			<th scope="row"><label for="dbname">Nombre de la base de datos</label></th>
			<td><input name="dbname" id="dbname" type="text" size="25" value="wordpress" /></td>
			<td>El nombre de la base de datos en la que quieres que se ejecute WP. </td>
		</tr>
		<tr>
			<th scope="row"><label for="uname">Usuario</label></th>
			<td><input name="uname" id="uname" type="text" size="25" value="username" /></td>
			<td>Tu  usuario de MySQL</td>
		</tr>
		<tr>
			<th scope="row"><label for="pwd">Contraseña</label></th>
			<td><input name="pwd" id="pwd" type="text" size="25" value="password" /></td>
			<td>…y la contraseña de MySQL.</td>
		</tr>
		<tr>
			<th scope="row"><label for="dbhost">Host de la base de datos</label></th>
			<td><input name="dbhost" id="dbhost" type="text" size="25" value="localhost" /></td>
			<td>El 99% de las veces no hay que cambiar este valor.</td>
		</tr>
		<tr>
			<th scope="row"><label for="prefix">Prefijo de tablas</label></th>
			<td><input name="prefix" id="prefix" type="text" id="prefix" value="wp_" size="25" /></td>
			<td>Si quieres ejecutar varias instalaciones de WordPress en una sola base de datos cambia esto.</td>
		</tr>
	</table>
	<p class="step"><input name="submit" type="submit" value="Enviar" class="button" /></p>
</form>
<?php
	break;

	case 2:
	$dbname  = trim($_POST['dbname']);
	$uname   = trim($_POST['uname']);
	$passwrd = trim($_POST['pwd']);
	$dbhost  = trim($_POST['dbhost']);
	$prefix  = trim($_POST['prefix']);
	if (empty($prefix)) $prefix = 'wp_';

	// Comprueba la conexión con la base de datos.
	/**#@+
	 * @ignore
	 */
	define('DB_NAME', $dbname);
	define('DB_USER', $uname);
	define('DB_PASSWORD', $passwrd);
	define('DB_HOST', $dbhost);
	/**#@-*/

	// Fallará todo si los valores no son correctos.
	require_wp_db();
	if ( !empty($wpdb->error) )
		wp_die($wpdb->error->get_error_message());

	foreach ($configFile as $line_num => $line) {
		switch (substr($line,0,16)) {
			case "define('DB_NAME'":
				$configFile[$line_num] = str_replace("nombredetubasededatos", $dbname, $line);
				break;
			case "define('DB_USER'":
				$configFile[$line_num] = str_replace("'nombredeusuario'", "'$uname'", $line);
				break;
			case "define('DB_PASSW":
				$configFile[$line_num] = str_replace("'contraseña'", "'$passwrd'", $line);
				break;
			case "define('DB_HOST'":
				$configFile[$line_num] = str_replace("localhost", $dbhost, $line);
				break;
			case '$table_prefix  =':
				$configFile[$line_num] = str_replace('wp_', $prefix, $line);
				break;
		}
	}
	if ( ! is_writable(ABSPATH) ) :
		display_header();
?>
<p>Lo sentimos, no se pudo escribir en el fichero <code>wp-config.php</code>.</p>
<p>Pudes crear manualmente el fichero <code>wp-config.php</code> y pear el siguiente texto en el mismo.</p>
<textarea cols="90" rows="15"><?php
		foreach( $configFile as $line ) {
			echo htmlentities($line);
		}
?></textarea>
<p>Una vez hayas hecho esto haz clic en  "Iniciar la instalación."</p>
<p class="step"><a href="install.php" class="button">Iniciar la instalación</a></p>
<?php
	else :
		$handle = fopen(ABSPATH . 'wp-config.php', 'w');
		foreach( $configFile as $line ) {
			fwrite($handle, $line);
		}
		fclose($handle);
		chmod(ABSPATH . 'wp-config.php', 0666);
		display_header();
?>
<p>¡Todo correcto! Ya has terminado esta parte de la instalación. WordPress ya puede comunicarse con la base de datos. Si estás listo ahora toca&hellip;</p>

<p class="step"><a href="install.php" class="button">Iniciar la instalación</a></p>
<?php
	endif;
	break;
}
?>
</body>
</html>
