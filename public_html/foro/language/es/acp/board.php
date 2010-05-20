<?php
/**
    *
    * This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
    * Copyright (c) 2007 Huan Manwe for phpbb-es.com
    *
    * This program is free software; you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation; either version 2 of the License, or
    * (at your option) any later version.
    *
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    * GNU General Public License for more details.
    *
    * You should have received a copy of the GNU General Public License along
    * with this program; if not, write to the Free Software Foundation, Inc.,
    * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
    *
    */
	
// ’ » " " …

/**
*
* This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
* Copyright (c) 2007 Huan Manwe for phpbb-es.com
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
**/

/** 
*
* acp_board.php [Spanish [Es]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aquí puede determinar las operaciones básicas de su Sitio, desde el nombre pasando por el registro de usuarios hasta los mensajes privados.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizar…',
	'DEFAULT_DATE_FORMAT'			=> 'Formato de fecha',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'El formato de fecha es el mismo que en la función <code>date</code> de PHP.',
	'DEFAULT_LANGUAGE'				=> 'Idioma por defecto',
	'DEFAULT_STYLE'					=> 'Estilo por defecto',
	'DISABLE_BOARD'					=> 'Deshabilitar Sitio',
	'DISABLE_BOARD_EXPLAIN'			=> 'Esto hará al Sitio inaccesible a los usuarios. Si quiere, también puede introducir un breve mensaje (255 caracteres) para mostrar.',
	'OVERRIDE_STYLE'				=> 'Sustituir estilo del usuario',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Reemplaza el estilo del usuario por el estilo por defecto.',
	'SITE_DESC'						=> 'Descripción del Sitio',
	'SITE_NAME'						=> 'Nombre del Sitio',
	'SYSTEM_DST'					=> 'Habilitar horario de ahorro de energía',
	'SYSTEM_TIMEZONE'				=> 'Zona horaria del sistema',
	'WARNINGS_EXPIRE'				=> 'Duración de la advertencia',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Número de días a transcurrir antes de que la advertencia expire automáticamente',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aquí puede habilitar/deshabilitar varias características del Sitio',

	'ALLOW_ATTACHMENTS'				=> 'Permitir adjuntos',
	'ALLOW_BIRTHDAYS'				=> 'Permitir cumpleaños',
	'ALLOW_BIRTHDAYS_EXPLAIN'		=> 'Permitir la introducción de cumpleaños y que la edad sea visualizada en los perfiles. Por favor tenga en cuenta que la lista de cumpleaños en el Índice del Foro está controlada por otro parámetro.',
	'ALLOW_BOOKMARKS'				=> 'Permitir añadir temas como Favoritos',
	'ALLOW_BOOKMARKS_EXPLAIN'		=> 'El usuario será capaz de guardar Favoritos personales',
	'ALLOW_BBCODE'					=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'			=> 'Permitir la suscripción a/seguimiento de Foros',
	'ALLOW_NAME_CHANGE'				=> 'Permitir cambios de nombre de usuario',
	'ALLOW_NO_CENSORS'				=> 'Permitir deshabilitar lista de palabras censuradas',
	'ALLOW_NO_CENSORS_EXPLAIN'		=> 'Los usuarios pueden elegir deshabilitar la lista de palabras censuradas de mensajes y mensajes privados.',
	'ALLOW_PM_ATTACHMENTS'			=> 'Permitir adjuntos en mensajes privados',
	'ALLOW_PM_REPORT'			=> 'Permitir a los usuarios informar de mensajes privados',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Si esta configuración está habilitada, los usuarios tienen la opción de informar de un mensaje privado que hayan recibido o enviado a los moderadores del foro. Estos mensajes privados serán visibles entonces en el Panel de Control de Moderador.',
	'ALLOW_QUICK_REPLY'			=> 'Permitir respuesta rápida',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Esta opción define si la respuesta rápida está habilitada o no. Si esta opción está habilitada los foros han de tener también habilitada su configuración de respuesta privada.',
	'ALLOW_SIG'						=> 'Permitir firmas',
	'ALLOW_SIG_BBCODE'				=> 'Permitir etiquetas BBCode en la firma del usuario',
	'ALLOW_SIG_FLASH'				=> 'Permitir uso de etiquetas BBCode <code>[FLASH]</code> en la firma del usuario',
	'ALLOW_SIG_IMG'					=> 'Permitir uso de etiquetas BBCode <code>[IMG]</code> en la firma del usuario',
	'ALLOW_SIG_LINKS'				=> 'Permitir uso de enlaces en la firma del usuario',
	'ALLOW_SIG_LINKS_EXPLAIN'		=> 'Si está deshabilitado, las etiquetas BBCode <code>[URL]</code> y las URL\'s automáticas estarán deshabilitadas.',
	'ALLOW_SIG_SMILIES'				=> 'Permitir uso de emoticonos en la firma del usuario',
	'ALLOW_SMILIES'					=> 'Permitir emoticonos',
	'ALLOW_TOPIC_NOTIFY'			=> 'Permitir la suscripción a temas',
	'BOARD_PM'						=> 'Mensajes privados',
	'BOARD_PM_EXPLAIN'				=> 'Habilite o deshabilite mensajes privados para todos los usuarios.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Los avatares son, por lo general, pequeñas imágenes distintivas que un usuario puede asociar a sí mismo. Dependiendo del estilo suelen ser mostrados debajo del nombre de usuario cuando se lea un tema. Aquí puede establecer cómo podrán determinar los usuarios sus propios avatares. Por favor tenga en cuenta que para subir avatares necesita haber creado el directorio que se configura abajo y asegurarse de que pueda ser escrito por el servidor Web. Por favor tenga también en cuenta que los límites en el tamaño del archivo solo tienen efecto sobre los avatares subidos, no se aplican a las imágenes enlazadas fuera del Sitio.',
	'ALLOW_AVATARS'					=> 'Habilitar avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permitir el uso general de avatares;<br />Si deshabilita los avatares en general o los avatares en algún modo, los avatares deshabilitados no serán mostrados más en el foro, pero los usuarios aún podrán descargar sus propios avatares a través del Panel de Control de Usuario.',

	'ALLOW_LOCAL'					=> 'Habilitar galería de avatares',
	'ALLOW_REMOTE'					=> 'Habilitar avatares remotos',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatares enlazados de otro sitio web',
	'ALLOW_REMOTE_UPLOAD'			=> 'Permitir subida remota de avatares',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permitir subida de avatares desde otra web.',
	'ALLOW_UPLOAD'					=> 'Habilitar la subida de avatares',
	'AVATAR_GALLERY_PATH'			=> 'Ruta de galería de avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz para imagenes precargadas, ej. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Ruta en la que se guardarán los avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz, ej. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimensiones máximas del avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Alto x Ancho en pixels)',
	'MAX_FILESIZE'					=> 'Tamaño máximo del avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Para archivos subidos',
	'MIN_AVATAR_SIZE'				=> 'Dimensiones mínimas del avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Alto x Ancho en pixels)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Aquí puede ajustar los parámetros por defecto de los mensajes privados',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode en mensajes privados',
	'ALLOW_FLASH_PM'			=> 'Permitir uso de etiquetas BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Observe que la capacidad se usar flash en mensajes privados, si está habilitado aquí, también depende de los permisos.',
	'ALLOW_FORWARD_PM'			=> 'Permitir reenvío de mensajes privados',
	'ALLOW_IMG_PM'				=> 'Permitir uso de etiquetas BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Permitir envío de mensajes privados a múltiples usuarios y grupos',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'El envío a grupos puede ser configurado por grupos en la página de configuración de grupos.',
	'ALLOW_PRINT_PM'			=> 'Permitir vista de impresión en mensajes privados',
	'ALLOW_QUOTE_PM'			=> 'Permitir citas en mensajes privados',
	'ALLOW_SIG_PM'				=> 'Permitir firmas en mensajes privados',
	'ALLOW_SMILIES_PM'			=> 'Permitir emoticonos en mensajes privados',
	'BOXES_LIMIT'				=> 'Máximo de mensajes privados por carpeta',
	'BOXES_LIMIT_EXPLAIN'		=> 'Los usuarios pueden recibir no más que esta cantidad de mensajes en cada una de sus bandejas de mensajes privados. Ajuste este valor a  0 para permitir mensajes ilimitados.',
	'BOXES_MAX'					=> 'Máximo de carpetas de mensajes',
	'BOXES_MAX_EXPLAIN'			=> 'Por defecto los usuarios pueden crear este número de carpetas personales para mensajes privados.',
	'ENABLE_PM_ICONS'			=> 'Habilitar uso de emoticonos en temas de mensajes privados',
	'FULL_FOLDER_ACTION'		=> 'Acción por defecto para carpeta llena',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Acción a tomar si la carpeta de un usuario está llena, asumiendo que la acción elegida por el usuario, si es que ha elegido alguna, no es aplicable. La única excepción es para la carpeta "Mensajes Enviados" donde la acción por defecto es siempre borrar los mensajes antiguos.',
	'HOLD_NEW_MESSAGES'			=> 'Mantener nuevos mensajes',
	'PM_EDIT_TIME'				=> 'Tiempo límite de edición',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limita el tiempo disponible para editar un mensaje privado aún no entregado. Ponga este valor a 0 para deshabilitar esta opción.',
	'PM_MAX_RECIPIENTS'			=> 'Máximo de destinatarios permitidos',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'El número máximo de destinatarios permitidos en un mensaje privado. Si se inserta 0 se permitirá un número ilimitado. Esta configuración puede ser configurado para cada grupo en la página de configuración de grupos.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aquí puede ajustar los parámetros por defecto de los mensajes',
	'ALLOW_POST_LINKS'					=> 'Permitir enlaces en mensajes/mensajes privados',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si está deshabilitado, las etiquetas BBCode <code>[URL]</code> y las URLs automáticas estarán deshabilitadas.',
	'ALLOW_POST_FLASH'					=> 'Permitir etiquetas BBCODE <code>[FLASH]</code> en los mensajes',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si está deshabilitado, las etiquetas BBCode <code>[FLASH]</code> estarán deshabilitadan en los mensajes. De lo contrario el sistema de permisos controla qué usuarios pueden utilizar etiquetas BBCODE <code>[FLASH]</code>.',
	'BUMP_INTERVAL'					=> 'Intervalo de reactivación',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número de minutos, horas o días entre el último mensaje y la capacidad de reactivar su tema.',
	'CHAR_LIMIT'					=> 'Máximo de caracteres por mensaje',
	'CHAR_LIMIT_EXPLAIN'			=> 'El número de caracteres permitidos en un mensaje. Ajuste este valor a 0 para caracteres ilimitados.',
	'DELETE_TIME'					=> 'Límite para poder borrar',
	'DELETE_TIME_EXPLAIN'			=> 'Limita el tiempo disponible para borrar un nuevo mensaje. Inserte el valor 0 para deshabilitarlo.',
	'DISPLAY_LAST_EDITED'			=> 'Mostrar la fecha de la última edición',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Decidir si la fecha de la última edición se mostrará en los mensajes',
	'EDIT_TIME'						=> 'Tiempo límite de edición',
	'EDIT_TIME_EXPLAIN'				=> 'Limita el tiempo disponible para editar un mensaje. Ajuste este valor a 0 para deshabilitar esta opción.',
	'FLOOD_INTERVAL'				=> 'Intervalo de saturación',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que un usuario debe esperar para enviar un nuevo mensaje. Habilitar a los usuarios para ignorar esto requiere modificar sus permisos.',
	'HOT_THRESHOLD'					=> 'Umbral para Tema Popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Mensajes por tema requeridos para que sea considerado popular. Ajuste este valor a 0 para deshabilitar esta opción.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opciones en encuestas',
	'MAX_POST_FONT_SIZE'			=> 'Tamaño máximo de fuente en mensajes.',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamaño máximo de fuente permitido en un mensaje. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_POST_IMG_HEIGHT'			=> 'Altura máxima de imagen en mensajes',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima de una imagen/flash en mensajes. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_POST_IMG_WIDTH'			=> 'Ancho máximo de imagen en mensajes',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Ancho máximo de una imagen/flash en mensajes. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_POST_URLS'					=> 'Máximo de enlaces por mensaje',
	'MAX_POST_URLS_EXPLAIN'			=> 'Número máximo de URLs en un mensaje. Ajuste este valor a 0 para enlaces ilimitados.',
	'MIN_CHAR_LIMIT'				=> 'Número mínimo de caracteres por mensaje',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'El número mínimo de caracteres que el usuario necesita introducir en el mensaje (o mensaje privado).',
	'POSTING'						=> 'Publicación',
	'POSTS_PER_PAGE'				=> 'Mensajes por página',
	'QUOTE_DEPTH_LIMIT'				=> 'Máximo de citas anidadas por mensaje',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Número máximo de citas anidadas en un mensaje. Ajuste este valor a 0 para citas infinitas.',
	'SMILIES_LIMIT'					=> 'Máximo de emoticonos por mensaje',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Número máximo de emoticonos en un mensaje. Ajuste este valor a 0 para emoticonos ilimitados.',
	'SMILIES_PER_PAGE'				=> 'Emoticonos por página',
	'TOPICS_PER_PAGE'				=> 'Temas por página',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aquí puede ajustar los parámetros por defecto de las firmas',

	'MAX_SIG_FONT_SIZE'				=> 'Tamaño máximo de fuente en firmas',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamaño máximo de fuente permitido en firmas. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Altura máxima de imagen en firmas',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima de una imagen/flash en firmas. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_IMG_WIDTH'				=> 'Ancho máximo de imagen en firmas',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Ancho máximo de una imagen/flash en firmas. Ajuste este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_LENGTH'				=> 'Longitud máxima de las firmas',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Máximo número de caracteres en las firmas de los usuarios.',
	'MAX_SIG_SMILIES'				=> 'Máximo de emoticonos por firma',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Número máximo de emoticonos en un mensaje. Ajuste este valor a 0 para emoticonos ilimitados.',
	'MAX_SIG_URLS'					=> 'Máximo de enlaces por firma',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Número máximo de URLs en un mensaje. Ajuste este valor a 0 para enlaces ilimitados.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'Aquí puede definir parámetros relativos al formulario de registro y el perfil',

	'ACC_ACTIVATION'			=> 'Activación de cuenta',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Esto determina si los usuarios tienen acceso inmediato al Sitio o bien si se requiere confirmación. También puede deshabilitar por completo nuevos registros.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Límite de mensajes para nuevos usuarios',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Los nuevos miembros se encuentran dentro del grupo <em>Nuevos Usuarios Registrados</em> hasta que alcancen este número de mensajes. Puede usar este grupo para evitar el sistema de mensaje privados (MP) o revisar sus mensajes. <strong>Un valor de 0 deshabilita esta opción.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Asignar el grupo Nuevos Usuarios Registrados como grupo por defecto',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Si marca el SÍ y se especifica un límite de mensajes para nuevos miembros entonces los nuevos usuarios registrados no solo serán integrados en el grupo de <em>Nuevos Usuarios Registrados</em>, sino que ese será su grupo por defecto. Esto puede ser de utilidad si quieres asignar un rango/avatar de grupo por defecto que el usuario heredará.',
	'ACC_ADMIN'					=> 'Admin',
	'ACC_DISABLE'				=> 'Deshabilitar',
	'ACC_NONE'					=> 'Ninguna',
	'ACC_USER'					=> 'Usuario',
//	'ACC_USER_ADMIN'			=> 'Usuario + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Permitir reutilización de email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Diferentes usuarios pueden registrarse con la misma dirección de email.',
	'COPPA'						=> 'APPCO Acta de Protección y Privacidad de Menores Online',
	'COPPA_FAX'					=> 'Fax de APPCO',
	'COPPA_MAIL'				=> 'Email de APPCO',
	'COPPA_MAIL_EXPLAIN'		=> 'Esta es la dirección de email donde los padres deben enviar formularios de registro APPCO',
	'ENABLE_COPPA'				=> 'Habilitar APPCO',
	'ENABLE_COPPA_EXPLAIN'		=> 'Esto requiere que los usuarios declaren ser mayores de 13 años para aceptar las disposiciones APPCO. Si la deshabilita, los grupos específicos de APPCO no se mostrarán.',
	'MAX_CHARS'					=> 'Máx.',
	'MIN_CHARS'					=> 'Min.',
	'NO_AUTH_PLUGIN'			=> 'No se encontró una autentificación satisfactoria del plugin.',
	'PASSWORD_LENGTH'			=> 'Longitud de la contraseña',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número de caracteres mínimo y máximo en las contraseñas.',
	'REG_LIMIT'					=> 'Intentos de registro',
	'REG_LIMIT_EXPLAIN'			=> 'Número de intentos que los usuarios pueden hacer con el código de confirmación antes de que se les bloquee la sesión.',
	'USERNAME_ALPHA_ONLY'		=> 'Solo alfanúmerico',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumérico y espaciadores',
	'USERNAME_ASCII'			=> 'ASCII (sin unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Cualquier letra y número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Cualquier letra, número y espaciadores',
	'USERNAME_CHARS'			=> 'Caracteres en nombre de usuario',
	'USERNAME_CHARS_ANY'		=> 'Cualquier caracter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringe el tipo de caracteres que pueden ser usados en nombres de usuario, espaciadores son; espacio, -, +, _, [ y ]',
	'USERNAME_LENGTH'			=> 'Longitud de nombre de usuario',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número de caracteres mínimo y máximo en nombres de usuario.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Configuración General de Syndication Feeds',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este Módulo permite varios ATOM Feeds, analizando sintácticamente cualquier BBCode en los mensajes para hacerlos legibles en Feeds externos.',

	'ACP_FEED_ENABLE'					=> 'Habilitar Feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Activa o desactiva ATOM Feeds en todo el Sitio.<br />Si lo deshabilita entonces desactivaría todos los Feeds, sin importar cómo configure las opciones de abajo.',
	'ACP_FEED_LIMIT'					=> 'Número de ítems',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Número máximo de ítems de Feed a mostrar.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Activa Feeds en todos los foros',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Este Feed muestra los últimos mensajes de todos los temas del foro.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Número de ítems por página a mostrar en el Feed del foro',

	'ACP_FEED_OVERALL_TOPIC'			=> 'Activa Feed para todos los temas',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Activa el Feed “Todos los Temas”',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Número de ítems por página a mostrar en el Feed de temas',
	'ACP_FEED_FORUM'					=> 'Activa Feeds Por-Foro',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Nuevos mensajes en único foro.',
	'ACP_FEED_TOPIC'					=> 'Activa Feeds Por-Tema',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Nuevos mensajes en único tema.',
	'ACP_FEED_NEWS'						=> 'Feeds de Noticias',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Sacar el primer mensaje de estos foros. No seleccione foros para deshabilitar los Feeds de Noticias.<br />Seleccione múltiples foros haciendo clic a la vez en la tecla <samp>CTRL</samp> y en el foro.',

	'ACP_FEED_GENERAL'					=> 'Configuración General de Feeds',

	'ACP_FEED_ITEM_STATISTICS'			=> 'Estadísticas de Ítem',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Muestra estadísticas individuales debajo de los ítems de feed<br />(Enviado por, fecha y hora, Respuestas, Vistas)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir estos foros',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'El contenido de estos <strong>no serán incluídos en los feeds</strong>. No seleccione ningún foro para sacar datos de todos los foros.<br />Seleccione/Deseleccione múltiples foros haciendo clic a la vez en la tecla <samp>CTRL</samp> y en el foro.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Aquí puede seleccionar y configurar los plugins del CAPTCHA, los cuales implementan varias formas de rechazar los intentos de registro por parte de los así llamados spambots o robots de correo no deseado.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugins disponibles',
	'CAPTCHA_UNAVAILABLE'					=> 'El CAPTCHA no puede ser seleccionado ya que no se han encontrado sus requisitos básicos.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Ruido de fondo GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'					=> 'Emplear la librería visual GD para hacer CAPTCHA más avanzado',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Usar ruido de fondo para hacer más difícil el CAPTCHA basado en GD.',
	'CAPTCHA_GD_X_GRID'						=> 'Ruido de fondo GD CAPTCHA eje-x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Use valores bajos para aumentar la dificultad. 0 deshabilite ruido de fondo eje-x.',
	'CAPTCHA_GD_Y_GRID'						=> 'Ruido de fondo GD CAPTCHA eje-y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Use valores bajos para aumentar la dificultad. 0 deshabilite ruido de fondo eje-y.',
    'CAPTCHA_GD_WAVE'              		    => 'Distorsión de onda GD CAPTCHA',
    'CAPTCHA_GD_WAVE_EXPLAIN'        	    => 'Esto aplica una distorsión de onda al CAPTCHA.',
    'CAPTCHA_GD_3D_NOISE'            		=> 'Añade objetos de ruido-3D',
    'CAPTCHA_GD_3D_NOISE_EXPLAIN'    	    => 'Esto añade objetos adicionales al CAPTCHA, por encima de las letras.',
    'CAPTCHA_GD_FONTS'                  	=> 'Usar fuentes diferentes',
    'CAPTCHA_GD_FONTS_EXPLAIN'            	=> 'Esta opción controla cuántas formas diferentes de letra se usarán. Puede simplemente usar las formas por defecto o introducir letras modificadas. Añadir letras minúsculas también es posible.',
    'CAPTCHA_FONT_DEFAULT'               	=> 'Por defecto',
    'CAPTCHA_FONT_NEW'                  	=> 'Nuevas Formas',
    'CAPTCHA_FONT_LOWER'               		=> 'Usar también minúsculas',
    'CAPTCHA_GD_WAVE'              		    => 'Distorsión de onda GD CAPTCHA',
    'CAPTCHA_GD_WAVE_EXPLAIN'        	    => 'Esto aplica una distorsión de onda al CAPTCHA.',
    'CAPTCHA_GD_3D_NOISE'            		=> 'Añade objetos de ruido-3D',
    'CAPTCHA_GD_3D_NOISE_EXPLAIN'    	    => 'Esto añade objetos adicionales al CAPTCHA, por encima de las letras.',
    'CAPTCHA_GD_FONTS'                  	=> 'Usar fuentes diferentes',
    'CAPTCHA_GD_FONTS_EXPLAIN'            	=> 'Esta opción controla cuántas formas diferentes de letra se usarán. Puede simplemente usar las formas por defecto o introducir letras modificadas. Añadir letras minúsculas también es posible.',
    'CAPTCHA_FONT_DEFAULT'               	=> 'Por defecto',
    'CAPTCHA_FONT_NEW'                  	=> 'Nuevas Formas',
    'CAPTCHA_FONT_LOWER'               		=> 'Usar también minúsculas',

	'CAPTCHA_NO_GD'							=> 'CAPTCHA sin GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'Los cambios de confirmación visual no fueron guardados. Es solo una vista previa.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHA se verá así usando los parámetros actuales. Use el botón de vista previa para actualizar. Observe que los captchas son aleatorios y difieren de una vista a otra.',
	'CAPTCHA_SELECT'						=> 'Plugins de CAPTCHA instalados',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'El desplegable contiene los plugins de CAPTCHA reconocidos por este foro. Las entradas grises no están disponibles ahora mismo y pueden necesitar una configuración previa a su uso.',
	'CAPTCHA_CONFIGURE'						=> 'Configurar CAPTCHAs',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Cambiar los parámetros para el CAPTCHA seleccionado.',
	'CONFIGURE'								=> 'Configurar',
	'CAPTCHA_NO_OPTIONS'					=> 'Este CAPTCHA no tiene parámetros de configuración.',
	'VISUAL_CONFIRM_POST'					=> 'Habilitar confirmación visual para mensajes de invitados',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requiere que los usuarios anónimos ingresen un código al azar incluído en una imagen para evitar publicaciones masivas (spam).',
	'VISUAL_CONFIRM_REG'					=> 'Habilitar confirmación visual para registros',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requiere que los nuevos usuarios ingresen un código al azar incluído en una imagen para evitar registros masivos.',
    'VISUAL_CONFIRM_REFRESH'          		=> 'Permitir a los usuarios refrescar la imagen de confirmación',
    'VISUAL_CONFIRM_REFRESH_EXPLAIN'      	=> 'Permitir a los usuarios pedir nuevos códigos de confirmación, si no pueden resolver el VC durante el registro.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'Estos detalles determinan los datos usados para enviar cookies a los navegadores de los usuarios. En la mayoría de los casos los valores por defecto para los configuración de las cookies deberían ser suficiente. Si necesita cambiar algo, hágalo con cuidado, parámetros incorrectos impedirían que los usuarios puedan identificarse.',

	'COOKIE_DOMAIN'				=> 'Dominio de la cookie',
	'COOKIE_NAME'				=> 'Nombre de la cookie',
	'COOKIE_PATH'				=> 'Ruta de la cookie',
	'COOKIE_SECURE'				=> 'Cookie segura',
	'COOKIE_SECURE_EXPLAIN'		=> 'Si su servidor emplea SSL, habilite esta opción, si no, déjelo deshabilitado. Habilitar esto sin usar SSL provocará errores en el servidor.',
	'ONLINE_LENGTH'				=> 'Lapso de tiempo para verse con estado identificado',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Número de minutos después de los cuales los usuarios inactivos no aparecerán en la lista "Quién está conectado". Un valor mayor requiere más procesamiento para generar la lista.',
	'SESSION_LENGTH'			=> 'Duración de la sesión',
	'SESSION_LENGTH_EXPLAIN'	=> 'Las sesiones expiran transcurrido este tiempo, en segundos.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aquí puede habilitar y deshabilitar ciertas funciones del Sitio para reducir la cantidad de procesamiento requerido. En la mayoría de los servidores no hay necesidad de deshabilitar ninguna función. Sin embargo en ciertos sistemas o entornos compartidos puede ser beneficioso deshabilitar capacidades que no necesite realmente. También puede especificar límites para la carga de sistema y sesiones activas, superadas las cuales el Sitio se pondrá fuera de línea.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Campos de perfil personalizados',
	'LIMIT_LOAD'					=> 'Límite de carga de sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si el promedio de carga del sistema por minuto excede este valor, el Sitio automáticamente se pondrá fuera de línea. Un valor de 1.0 equivale ~100% de utilización de un procesador. Esto solo funciona en servidores UNIX.',
	'LIMIT_SESSIONS'				=> 'Límite de sesiones',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si el número de sesiones excede este valor en el periodo de un minuto, el Sitio automáticamente se pondrá fuera de línea. Ponga este valor en 0 para sesiones ilimitadas.',
	'LOAD_CPF_MEMBERLIST'			=> 'Permitir estilos para mostrar campos de perfil personalizados en la lista de usuarios',
	'LOAD_CPF_VIEWPROFILE'			=> 'Mostrar campos de perfil personalizados en perfiles de usuario',
	'LOAD_CPF_VIEWTOPIC'			=> 'Mostrar campos de perfil personalizados al ver temas',
	'LOAD_USER_ACTIVITY'			=> 'Mostrar actividad del usuario',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostrar actividad en temas/foros en perfil de usuario y panel de control de usuario. Se recomienda deshabilitar esto en sitios con más de un millón de mensajes.',
	'RECOMPILE_STYLES'				=> 'Recompilar plantillas antiguas',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Busca plantillas actualizadas y las reconstruye.',
	'YES_ANON_READ_MARKING'			=> 'Habilitar marcado de temas para invitados',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Guarda información de leído/no leído para invitados. Si se deshabilita, los mensajes siempre se muestran como leídos a los invitados.',
	'YES_BIRTHDAYS'					=> 'Habilitar lista de cumpleaños',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si está deshabilitada, la lista de cumpleaños no se visualizará. Para que esta preferencia tenga efecto, la preferencia de cumpleaños deber estar también habilitada.',
	'YES_JUMPBOX'					=> 'Habilite mostrar \'Saltar a\'',
	'YES_MODERATORS'				=> 'Habilite mostrar moderadores',
	'YES_ONLINE'					=> 'Habilite listado de usuarios identificados',
	'YES_ONLINE_EXPLAIN'			=> 'Muestra una lista de usuarios identificados en inicio, foros y tema.',
	'YES_ONLINE_GUESTS'				=> 'Habilite listado de invitados identificados en Ver Conectados',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permite mostrar usuarios invitados en Ver Conectados.',
	'YES_ONLINE_TRACK'				=> 'Habilite mostrar información de usuarios identificados/desconectados',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Muestra información de usuario identificado en perfiles y ver tema.',
	'YES_POST_MARKING'				=> 'Habilitar marcado de temas',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica si un usuario ha publicado en un tema.',
	'YES_READ_MARKING'				=> 'Habilitar marcado de temas en el servidor',
	'YES_READ_MARKING_EXPLAIN'		=> 'Guarda información de leído/no leído en la base de datos en vez de en una cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB soporta plugins de autentificación o módulos. Esto le permite determinar cómo se identifica a los usuarios cuando se conectan al Sitio. Por defecto se proveen tres plugins; DB, LDAP y Apache. No todos los métodos requieren información adicional, así que rellene solo los campos que sean relevantes para el método elegido.',

	'AUTH_METHOD'	=> 'Seleccione un método de autentificación',

	'APACHE_SETUP_BEFORE_USE'	=> 'Tiene que configurar la autentificación de Apache antes de cambiar a este método. Tenga en cuenta que el nombre de usuario que emplea para autentificación de Apache tiene que ser el mismo que usa en phpBB.',

	'LDAP_DN'	=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'Éste es el Distinguished Name, que se usa para la localización de usuario, ej. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'	=> 'LDAP atributo email',
	'LDAP_EMAIL_EXPLAIN'	=> 'Configure esto con el nombre del atributo de usuario de email entrante (si existe) para configurar automáticamente la dirección de email para nuevos usuarios. Dejar esto vacío provoca una dirección de email vacía para usuarios que ingresan por primera vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La conexión con el servidor LDAP ha fallado con el usuario/contraseña especificado(s).',
	'LDAP_NO_EMAIL'	=> 'El atributo de email especificado no existe.',
	'LDAP_NO_IDENTITY'	=> 'No se puede encontrar una identidad para %s',
	'LDAP_PASSWORD'	=> 'Contraseña LDAP',
	'LDAP_PASSWORD_EXPLAIN'	=> 'Deje en blanco para acceso anónimo. Si no, complételo con la contraseña de usuario. <strong>ADVERTENCIA:</strong> Esta contraseña será guardada como texto plano en la base de datos, visible para cualquiera que tenga acceso a la misma.',
	'LDAP_PORT'						=> 'Puerto de servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Opcionalmente puede especificar un puerto que se usaría para conectar al servidor LDAP en vez del puerto por defecto 389.',
	'LDAP_SERVER'	=> 'Nombre de servidor LDAP',
	'LDAP_SERVER_EXPLAIN'	=> 'Si usa LDAP, éste es el nombre o dirección IP del servidor.',
	'LDAP_UID'	=> '<var>uid</var> LDAP ',
	'LDAP_UID_EXPLAIN'	=> 'Esta es la contraseña bajo la cual se busca una identidad, ej. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'	=> 'Usuario LDAP',
	'LDAP_USER_EXPLAIN'	=> 'Deje en blanco para acceso anónimo. Si lo completa, phpBB conectará con el servidor LDAP como el usuario especificado.',
	'LDAP_USER_FILTER'				=> 'Filtro de usuario LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcionalmente puede limitar más los objetos buscados con filtros adicionales. Por ejemplo <samp>objectClass=posixGroup</samp> resultaría en el uso de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aquí puede definir parámetros relativos a dominio y servidor. Por favor verifique que los datos que introduzca sean exactos, los errores provocarían emails con información incorrecta. Cuando configure el dominio, recuerde poner http:// u otro protocolo. Solo cambie el número de puerto si sabe que su servidor emplea uno diferente, el puerto 80 está bien para la mayoría de los casos.',

	'ENABLE_GZIP'	=> 'Habilitar compresión Gzip',
	'ENABLE_GZIP_EXPLAIN'	=> 'El contenido generado será comprimido antes de enviarse al usuario. Esto puede reducir el tráfico de red, pero incrementa el uso de CPU tanto en el servidor como del lado del usuario. Requiere la extensión zlib de PHP para ser cargado.',
	'FORCE_SERVER_VARS'	=> 'Forzar parámetro URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si configura SÍ el parámetro definido aquí, será empleado en lugar del valor predeterminado automáticamente',
	'ICONS_PATH'	=> 'Ruta de guardado de iconos de mensaje',
	'ICONS_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz, ej. <samp>images/icons</samp>',
	'PATH_SETTINGS'	=> 'Configuración de ruta',
	'RANKS_PATH'	=> 'Ruta de guardado de imágenes de rango',
	'RANKS_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz, ej. <samp>images/ranks</samp>',
	'SCRIPT_PATH'	=> 'Ruta de phpBB',
	'SCRIPT_PATH_EXPLAIN'	=> 'Ruta donde está ubicado phpBB relativa al nombre de dominio, ej. <samp>/phpBB3</samp>',
	'SERVER_NAME'	=> 'Nombre de dominio',
	'SERVER_NAME_EXPLAIN'	=> 'El nombre del dominio de este Sitio (por ejemplo: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'	=> 'Puerto del servidor',
	'SERVER_PORT_EXPLAIN'	=> 'El puerto que utiliza su servidor, normalmente 80, cámbielo solo si es diferente',
	'SERVER_PROTOCOL'	=> 'Protocolo del servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Se usa como protocolo del servidor si se fuerzan los parámetros. Caso contrario el protocolo es determinado por los configuración de cookie (<samp>http://</samp> o <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'	=> 'Configuración de URL',
	'SMILIES_PATH'	=> 'Ruta de guardado de emoticonos',
	'SMILIES_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz, ej. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'	=> 'Ruta de guardado de iconos de extensiones',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Ruta en su directorio raíz, ej. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aquí puede definir parámetros relativos a conexión y sesiones',

	'ALL'								=> 'Todo',
	'ALLOW_AUTOLOGIN'					=> 'Permitir conexión persistente',
	'ALLOW_AUTOLOGIN_EXPLAIN'			=> 'Determina si el usuario puede identificarse automáticamente cuando visita el Sitio.',
	'AUTOLOGIN_LENGTH'					=> 'Expiración de la conexión persistente (en días)',
	'AUTOLOGIN_LENGTH_EXPLAIN'			=> 'Número de días después de los cuales el usuario deberá volver a introducir su contraseña, 0 para deshabilitar.',
	'BROWSER_VALID'						=> 'Validar navegador',
	'BROWSER_VALID_EXPLAIN'				=> 'Habilite la validación de navegador para cada sesión mejorando la seguridad.',
	'CHECK_DNSBL'						=> 'Verificar IP en las listas negras de DNS',
	'CHECK_DNSBL_EXPLAIN'				=> 'Si está habilitado, la direccion IP de los usuarios es verificada en los siguiente servicios DNSBL (para registro y envío de mensaje): <a href="http://spamcop.net">spamcop.net</a> y <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Esta búsqueda puede llevar un tiempo, dependiendo de la configuración del servidor. Si se ralentiza demasiado o se reciben muchos falsos positivos se recomienda deshabilitar esta opción.',
	'CLASS_B'							=> 'A.B',
	'CLASS_C'							=> 'A.B.C',
	'EMAIL_CHECK_MX'					=> 'Verifica que el dominio del email tenga un registro MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'			=> 'Si está habilitado, se verificará que el dominio del email provisto en la registro y perfil tengan un registro MX válido.',
	'FORCE_PASS_CHANGE'					=> 'Forzar cambio de contraseña',
	'FORCE_PASS_CHANGE_EXPLAIN'			=> 'Requiere que un usuario cambie su contraseña después de un número específico de días. Ajuste este valor a 0 para deshabilitar esta opción.',
	'FORM_TIME_MAX'					=> 'Tiempo máximo para enviar formularios',
	'FORM_TIME_MAX_EXPLAIN'			=> 'El tiempo que un usuario tiene para enviar un formulario. Use -1 para desactivarlo. Note que un formulario puede volverse no válido si la sesión expira, independientemente de esta configuración.',
	'FORM_SID_GUESTS'				=> 'Relaciona formularios a sesiones de invitado',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Si está habilitado el vínculo del formulario relacionado con los invitados serán exclusivos de su sesión. Esto puede causar problemas con algunos ISPs.',
	'FORWARDED_FOR_VALID'				=> 'Validar encabezado <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'		=> 'Las sesiones continuarán si el encabezado <var>X_FORWARDED_FOR</var> enviado coincide con el previo. También se verificarán las exclusiones con la IP enviada en <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'							=> 'Validación de sesión por IP',
	'IP_VALID_EXPLAIN'					=> 'Determina qué porción de la IP del usuario se emplea para validar la sesión; <samp>Todo</samp> Compara la dirección completa, <samp>A.B.C</samp> los primeros x.x.x, <samp>A.B</samp> los primeros x.x, <samp>Ninguna</samp> deshabilite la verificación.',
	'MAX_LOGIN_ATTEMPTS'				=> 'Máximo de intentos de conexión',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'		=> 'Después de este número de intentos fallidos el usuario tiene que confirmar su identificación visualmente (confirmación visual)',
	'NO_IP_VALIDATION'					=> 'Ninguna',
	'NO_REF_VALIDATION'				=> 'Ninguna',
	'PASSWORD_TYPE'						=> 'Complejidad de la contraseña',
	'PASSWORD_TYPE_EXPLAIN'				=> 'Determina la complejidad necesaria para una contraseña, las opciones siguientes incluyen las precedentes.',
	'PASS_TYPE_ALPHA'					=> 'Debe contener alfanuméricos',
	'PASS_TYPE_ANY'						=> 'Ningún requerimiento',
	'PASS_TYPE_CASE'					=> 'Debe contener mayúsculas y minúsculas',
	'PASS_TYPE_SYMBOL'					=> 'Debe contener símbolos',
	'REF_HOST'						=> 'Solo validar host',
	'REF_PATH'						=> 'También validar ruta (path)',
	'REFERER_VALID'					=> 'Validar Referer',
	'REFERER_VALID_EXPLAIN'			=> 'Si está habilitado, el referer de peticiones de POST será comparado con la configuración existente de la ruta del host/script. Esto puede causar contingencias en foros que usen varios dominios y/o identificaciones externas.',
	'TPL_ALLOW_PHP'						=> 'Permitir PHP en plantillas',
	'TPL_ALLOW_PHP_EXPLAIN'				=> 'Si se habilita esta opción, <code>PHP</code> e <code>INCLUDEPHP</code> serán convertidos en las plantillas.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta información se usa cuando el Sitio envía emails a sus usuarios. Por favor verifique que la dirección de email ingresada sea válida, cualquier rebote se reenviará a esa dirección. Si su host no provee un servicio de email nativo (utilizable por PHP), entonces use directamente SMTP. Esto requiere la dirección de un servidor apropiado (pregúntele a su ISP de ser necesario). Si (si, y solo si) el servidor requiere autentificación complete el usuario y contraseña. Por favor observe que solo se ofrece autentificación básica, otro tipo de implementación no es posible actualmente.',

	'ADMIN_EMAIL'					=> 'Dirección de email',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Se usa como dirección de retorno de todos los emails, la dirección del contacto técnico. Siempre se usará como <samp>Return-Path</samp> y <samp>Sender</samp> en los emails.',
	'BOARD_EMAIL_FORM'				=> 'Usuarios envían email mediante el Sitio',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'En lugar de mostrar su dirección de email, los usuarios pueden enviar emails vía el Sitio.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar direcciones de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Mantiene las direcciones de email completamente privadas.',
	'CONTACT_EMAIL'					=> 'Email de contacto',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Esta dirección se usará cuando se necesite específicamente un contacto, ej. spam, errores, etc. Siempre se usará como <samp>From</samp> y <samp>Reply-To</samp> en los emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nombre de la función email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'La función empleada por PHP para enviar emails.',
	'EMAIL_PACKAGE_SIZE'			=> 'Tamaño del paquete de email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Número de emails enviados por paquete. Esta configuración se aplica a la fila de espera de mensajes interna. Establezca este valor a 0 si experimenta problemas conemails de notificación no enviados.',
	'EMAIL_SIG'						=> 'Firma de email',
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto se anexará a todos los emails que envíe el Sitio.',
	'ENABLE_EMAIL'					=> 'Habilitar envío de emails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si se deshabilita, el Sitio no enviará ningún tipo de email. <em>Note que los parámetros de activación de la cuenta del Admin y del usuario requiren que esta opción esté habilitada. Si la configuración de activación actual es “usuario” or “administrador” en los parámetros de activación entonces la deshabilitación de esta opción no requerirá la activación de cuentas nuevas.</em>',
	'SMTP_AUTH_METHOD'				=> 'Método de autentificación para SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Solo usado si se configura usuario/contraseña, pregúntele a su ISP si no está seguro de cual método usar.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Contraseña SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Solo introduzca una contraseña si su servidor SMTP lo requiere.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Puerto servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Cámbielo solo si sabe que su servidor SMTP está en un puerto diferente.',
	'SMTP_SERVER'					=> 'Dirección servidor SMTP',
	'SMTP_SETTINGS'					=> 'Configuración SMTP',
	'SMTP_USERNAME'					=> 'Usuario SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Solo introduzca un usuario si su servidor SMTP lo requiere.',
	'USE_SMTP'						=> 'Usar servidor SMTP para email',
	'USE_SMTP_EXPLAIN'				=> 'Elija "Sí" si quiere o necesita enviar emails mediante un servidor específico en lugar de la función de email local.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aquí puede habilitar y controlar el uso de Jabber para mensajería instantánea y avisos del Sitio. Jabber es un protocolo de código abierto y por lo tanto disponible para que lo use cualquiera. Algunos servidores Jabber le permiten contactar con usuarios en otras redes. No todos los servidores ofrecen todos los transportes, y los cambios en el protocolo pueden causar que algunos transportes dejen de funcionar. Observe que puede tomar varios segundos actualizar los datos de la cuenta Jabber, ¡no cancele el proceso hasta completarlo!',

	'JAB_ENABLE'				=> 'Habilitar Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Habilite el uso de mensajeria y notificaciones Jabber',
	'JAB_GTALK_NOTE'			=> 'Por favor fíjese en que GTalk no funcionará porque no se encontró la función <samp>dns_get_record</samp>. Esta función no está disponible en PHP4, y no está implementada en plataformas Windows. Actualmente no funciona en sistemas basados en BSD, incluído Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamaño del paquete Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Éste es el número de mensajes enviados en un paquete. Si es 0, el mensaje se envía inmediatamente y no se pone en cola para un envío posterior.',
	'JAB_PASSWORD'				=> 'Contraseña Jabber',
	'JAB_PORT'					=> 'Puerto Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Deje en blanco a menos que sepa que no es el puerto 5222',
	'JAB_SERVER'				=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Visite %sjabber.org%s para obtener una lista de servidores',
	'JAB_SETTINGS_CHANGED'		=> 'Configuración Jabber cambiada con éxito.',
	'JAB_USE_SSL'				=> 'Usar SSL para conectar',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si una conexión segura está habilitada, se intentará establecer la conexión. El puerto Jabber será cambiado a 5223 si está especificado el puerto 5222.',
	'JAB_USERNAME'				=> 'Usuario Jabber o JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Especifique un nombre de usuario registrado o un JID válido. No se comprobará la validez del nombre de usuario. Si solo especifica un nombre de usuario entonces su JID será el nombre de usuario y el servidor que especificó arriba. Si no, especifique un JID válido, por ejemplo user@jabber.org.',
));

?>