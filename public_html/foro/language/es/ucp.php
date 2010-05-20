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

*
* ucp.php [Spanish [Es]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007-Nov-26
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Al ingresar en "%1$s" (de aquí en adelante "nosotros", "nos", "nuestro", "%1$s", "%2$s"), <strong>acuerda</strong> estar legalmente sometido a los siguientes términos. En caso contrario por favor no se registre y/o use "%1$s". Podemos cambiar estos términos en cualquier momento e intentaríamos avisarle, sin embargo sería prudente que los revisase por su cuenta periódicamente. Seguir registrado a "%1$s" después de esos cambios significa que <strong>acuerda</strong> estar legalmente sometido a esos nuevos términos tal como fueron actualizados y/o reformados.<br />
	<br />
	Nuestros foros están desarrollados por phpBB (de aquí en adelante "ellos", "sus", "software phpBB", "www.phpbb.com", "phpBB Group", "phpBB Teams") el cual es una solución de tablón de anuncios liberada bajo la "<a href="http://opensource.org/licenses/gpl-license.php">Licencia Pública General (General Public License en inglés)</a>" (de aquí en adelante "GPL") y puede ser descargada de <a href="http://www.phpbb.com/">www.phpbb.com</a>. El software phpBB solamente facilita discusiones basadas en Internet y la GPL estrictamente los excluye de lo que aprobamos y/o desaprobamos como conductas y/o contenido permisible. Para más información sobre phpBB, por favor visite: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	<strong>Acuerda</strong> no enviar ningun contenido abusivo, obsceno, vulgar, difamatorio, indecente, amenazante, sexual o cualquier otro material que pueda violar cualquier ley de su país, el país donde "%1$s" está instalado o Leyes Internacionales. Hacer eso provocará que sea inmediata y permanentemente expulsado y, si lo creemos oportuno, con notificación a su Proveedor de Servicios de Internet. Las direcciones IP de todos los envíos son registradas como ayuda para reforzar estas condiciones. <strong>Acuerda</strong> que "%1$s" tiene derecho a eliminar, editar, mover o cerrar cualquier tema en cualquier momento que lo creamos conveniente. Como usuario <strong>acuerda</strong> que cualquier información que haya ingresado será almacenada en una base de datos. Dado que esta información no será compartida con ninguna tercera parte sin su consentimiento, ni "%1$s" ni phpBB podrán considerarse responsables por cualquier intento de hacking que conlleve a que los datos sean comprometidos.
	',
	
	'PRIVACY_POLICY'	=> 'Esta política explica con detalle cómo "%1$s" junto con sus empresas asociadas (de aquí en adelante "nosotros", "nos", "nuestro", "%1$s", "%2$s") y phpBB (de aquí en adelante "ellos", "sus", "software phpBB", "www.phpbb.com", "phpBB Group", "phpBB Teams") emplean cualquier información obtenida durante cualquier sesión de uso por usted (de aquí en adelante "su información").<br />
	<br />
	Su información es obtenida por dos vías. Primeramente, navegar por "%1$s" hará al software phpBB crear un número de cookies, las cuales son un pequeño archivo de texto que se descargan en los archivos temporales del navegador de su PC. Las primeras dos cookies sólo contienen un identificador de usuario (de aquí en adelante "user-id") y un identificador de sesión anónima (de aquí en adelante "session-id"), automáticamente asignada a usted por el software phpBB. Una tercera cookie se creará una vez que haya navegado por temas en "%1$s" y se emplea para registrar cuales han sido leídos, con objeto de optimizar su experiencia de usuario.<br />
	<br />
	Además podemos crear cookies externas al software phpBB mientras navega por "%1$s", las cuales exceden el alcance de este documento que solamente se refiere a las páginas creadas por el software phpBB. La segunda vía mediante la que obtenemos su información es mediante lo que usted envía. Esto puede ser, y no limitado a: envíos como usuario anónimo (de aquí en adelante "envíos anónimos"), su registro en "%1$s" (de aquí en adelante "su cuenta") y mensajes enviados por usted después de registrarse y mientras se haya identificado (de aquí en adelante "sus mensajes").<br />
	<br />
	Su cuenta como mínimo constará de un nombre único de identificación (de aquí en adelante "su nombre de usuario"), una contraseña personal empleada para la identificación (de aquí en adelante "su contraseña") y una dirección de email personal válida (de aquí en adelante "su email"). La información de su cuenta en "%1$s" está protegida por las leyes de protección de datos aplicables en el país en el que estamos instalados. Cualquier información más allá de su nombre de usuario, su contraseña y su dirección de e-mail requerida por "%1$s" durante el proceso de registro será obligatoria u opcional, según el criterio de “%1$s”. En cualquier caso, usted tiene la opción de qué información en su cuenta será públicamente exhibida. Además, en su cuenta, usted tiene la opción de activar o desactivar los emails generados automáticamente por el software phpBB.<br />
	<br />
	Su contraseña está encriptada (cifrado de una vía) por lo tanto está segura. Sin embargo, se recomienda que no emplee la misma contraseña en diferentes websites. Su contraseña garantiza el acceso a su cuenta en "%1$s", por favor guárdela cuidadosamente y bajo ninguna circunstancia ningún miembro "%1$s", phpBB u otra tercera parte, legítimamente le preguntará su contraseña. Si olvidó la contraseña de su cuenta, puede usar el servicio "Olvidé mi contraseña" provisto por el software phpBB. Este proceso le solicitará ingresar su nombre de usuario y su email, luego el software phpBB generará una nueva contraseña para recuperar su cuenta.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Su cuenta ha sido activada. Gracias por registrarse',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'La cuenta ha sido activada',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Su cuenta ha sido ahora reactivada correctamente.',
	'ACCOUNT_ADDED'					=> 'Gracias por registrarse, su cuenta ha sido creada. Ahora puede identificarse con su nombre de usuario y su contraseña',
	'ACCOUNT_COPPA'					=> 'Su cuenta ha sido creada pero no aprobada, por favor revise su email para más detalles.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Su cuenta ha sido actualizada. Sin embargo este foro requiere reactivación de cuenta por e-mail. Una clave de activación ha sido enviada a la nueva dirección de e-mail que ha proporcionado. Por favor, compruebe su e-mail para más información.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Su cuenta ha sido actualizada. Sin embargo este foro requiere reactivación de cuenta por los administradores via e-mail. Un e-mail se ha enviado a ellos y se le informará cuándo será reactivada su cuenta.',
	'ACCOUNT_INACTIVE'				=> 'Su cuenta ha sido creada. Sin embargo, este foro requiere activación de cuenta, una contraseña de activación ha sido enviada a la dirección de email que introdujo. Por favor revise su email para más información',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Su cuenta ha sido creada. Sin embargo, este foro requiere activación de cuenta por el administrador. Un email le ha sido enviado y se le informará cuando haya sido activada su cuenta',
	'ACTIVATION_EMAIL_SENT'			=> 'El email de activación ha sido enviado a su dirección de email',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'El email de activación ha sido enviado a las direcciones de correo de los administradores.',
	'ADD'							=> 'Añadir',
	'ADD_BCC'						=> 'Añadir [CCO]',
	'ADD_FOES'						=> 'Añadir nuevos ignorados',
	'ADD_FOES_EXPLAIN'				=> 'Puede introducir varios nombres de usuario cada uno en una nueva línea',
	'ADD_FOLDER'					=> 'Añadir directorio',
	'ADD_FRIENDS'					=> 'Añadir nuevos amigos',
	'ADD_FRIENDS_EXPLAIN'			=> 'Puede introducir varios nombres de usuario cada uno en una nueva línea',
	'ADD_NEW_RULE'					=> 'Añadir nueva regla',
	'ADD_RULE'						=> 'Añadir regla',
	'ADD_TO'						=> 'Añadir [Para]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Aquí puedes añadir nuevos usuarios al grupo. Puede seleccionar si este grupo se convertirá en el nuevo grupo por defecto para los usuarios seleccionados. Por favor introduzca cada nombre de usuario en una línea distinta.',
	'ADMIN_EMAIL'					=> 'Administradores pueden informarme por email',
	'AGREE'							=> 'Estoy de acuerdo con las reglas',
	'ALLOW_PM'						=> 'Permitir a los usuarios enviarte mensajes privados',
	'ALLOW_PM_EXPLAIN'				=> 'Tenga en cuenta que administradores y moderadores siempre podrán enviarle mensajes.',
	'ALREADY_ACTIVATED'				=> 'Ya había activado su cuenta',
	'ATTACHMENTS_EXPLAIN'			=> 'Esta es un lista de adjuntos que ha publicado en este foro.',
	'ATTACHMENTS_DELETED'			=> 'Adjuntos borrados correctamente.',
	'ATTACHMENT_DELETED'			=> 'Adjunto borrado correctamente.',
	'AVATAR_CATEGORY'				=> 'Categoría',
	'AVATAR_EXPLAIN'				=> 'Dimensiones máximas; ancho %1$d pixels, alto %2$d pixels, tamaño %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'La funcionalidad de avatar está actualmente desactivada.',
	'AVATAR_GALLERY'				=> 'Galería local',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'No se puede subir avatar a %s',
	'AVATAR_NOT_ALLOWED'			=> 'Su avatar no puede ser mostrado porque los avatares han sido deshabilitados.',
	'AVATAR_PAGE'					=> 'Página',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Su avatar no puede ser mostrado porque su tipo de archivo ha sido deshabilitado.',

	'BACK_TO_DRAFTS'				=> 'Volver a borradores guardados',
	'BACK_TO_LOGIN'					=> 'Volver a identificarse',
	'BIRTHDAY'						=> 'Cumpleaños',
	'BIRTHDAY_EXPLAIN'				=> 'Introducir el año mostrará su edad cuando sea su cumpleaños.',
	'BOARD_DATE_FORMAT'				=> 'Mi formato de fecha',
	'BOARD_DATE_FORMAT_EXPLAIN'		=> 'La sintaxis usada es idéntica a la función <a href="http://www.php.net/date">date()</a> en PHP',
	'BOARD_DST'						=> 'Horario de Ahorro de Energía en uso',
	'BOARD_LANGUAGE'				=> 'Mi idioma',
	'BOARD_STYLE'					=> 'Mi estilo',
	'BOARD_TIMEZONE'				=> 'Mi zona horaria',
	'BOOKMARKS'						=> 'Favoritos',
	'BOOKMARKS_EXPLAIN'				=> 'Puede añadir temas a Favoritos para futuras consultas. Seleccione el checkbox para el Favorito que quiera borrar, luego haga clic en el botón <em>Eliminar Favoritos marcados</em>.',
	'BOOKMARKS_DISABLED'			=> 'Añadir a Favoritos está deshabilitado en este Sitio',
	'BOOKMARKS_REMOVED'				=> 'Favoritos eliminados correctamente',

	'CANNOT_EDIT_MESSAGE_TIME'		=> 'Ya no puede editar o borrar este mensaje',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Los mensajes no pueden ser movidos a la directorio que quiere borrar.',
	'CANNOT_MOVE_FROM_SPECIAL'		=> 'Los mensajes no pueden ser movidos desde la bandeja de salida.',
	'CANNOT_RENAME_FOLDER'			=> 'Esta directorio no puede ser renombrada.',
	'CANNOT_REMOVE_FOLDER'			=> 'Esta directorio no puede ser eliminada.',
	'CHANGE_DEFAULT_GROUP'			=> 'Cambiar grupo por defecto',
	'CHANGE_PASSWORD'				=> 'Cambiar contraseña',
	'CLICK_RETURN_FOLDER'			=> '%1$sVolver a su  directorio de "%3$s" %2$s',
	'CONFIRMATION'					=> 'Confirmación de registro',
	'CONFIRM_CHANGES'				=> 'Confirmar cambios',
	'CONFIRM_EMAIL'					=> 'Confirmar dirección de email',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Necesita especificar esto sólo si va a cambiar su dirección de email.',
	'CONFIRM_EXPLAIN'				=> 'Para prevenir registros automáticos el administrador del Sitio requiere que introduzca un código de confirmación. El código se muestra en la imagen que debería ver debajo. Si está visualmente impedido o no puede ver el código, por favor contacte con el %sAdministrador del Sitio%s.',
    'VC_REFRESH'            => 'Refrescar código de confirmación',
    'VC_REFRESH_EXPLAIN'      => 'Si no puede leer el código puede pedir uno nuevo haciendo clic en el botón.',
	'CONFIRM_PASSWORD'				=> 'Confirmar contraseña',
	'CONFIRM_PASSWORD_EXPLAIN'		=> 'Necesita confirmar su contraseña sólo si la ha cambiado arriba',
	'COPPA_BIRTHDAY'				=> 'Para continuar con el proceso de registro, por favor indique cuándo nació.',
	'COPPA_COMPLIANCE'				=> 'APPCO (COPPA en inglés) compliance',
	'COPPA_EXPLAIN'					=> 'Por favor observe que al hacer clic en Enviar creará su cuenta. Sin embargo no podrá ser activada hasta que tu padre, madre o tutor(a) apruebe tu registro. Se te enviará una copia por email del formulario necesario con detalles de cómo enviarlo.',
	'CREATE_FOLDER'					=> 'Añadir directorio…',
	'CURRENT_IMAGE'					=> 'Imagen actual',
	'CURRENT_PASSWORD'				=> 'Contraseña actual',
	'CURRENT_PASSWORD_EXPLAIN'		=> 'Tiene que confirmar su contraseña actual si quiere editar su dirección de email o nombre de usuario.',
	'CUR_PASSWORD_ERROR'			=> 'La contraseña actual que introdujo es incorrecta.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizar…',

	'DEFAULT_ACTION'				=> 'Acción por defecto',
	'DEFAULT_ACTION_EXPLAIN'		=> 'Esta acción se activará si ninguna de las anteriores es aplicable',
	'DEFAULT_ADD_SIG'				=> 'Insertar mi firma por defecto',
	'DEFAULT_BBCODE'				=> 'Habilitar BBCode por defecto',
	'DEFAULT_NOTIFY'				=> 'Notificarme respuestas por defecto',
	'DEFAULT_SMILIES'				=> 'Habilitar emoticonos por defecto',
	'DEFINED_RULES'					=> 'Reglas definidas',
	'DELETED_TOPIC'					=> 'El tema ha sido eliminado',
	'DELETE_ATTACHMENT'				=> 'Borrar adjunto',
	'DELETE_ATTACHMENTS'			=> 'Borrar adjuntos',
	'DELETE_ATTACHMENT_CONFIRM'		=> '¿Está seguro de que quiere borrar este adjunto?',
	'DELETE_ATTACHMENTS_CONFIRM'	=> '¿Está seguro de que quiere borrar estos adjuntos?',
	'DELETE_AVATAR'					=> 'Borrar imagen',
	'DELETE_COOKIES_CONFIRM'		=> '¿Está seguro de que quiere borrar todas las cookies de este Sitio?',
	'DELETE_MARKED_PM'				=> 'Borrar mensajes marcados',
	'DELETE_MARKED_PM_CONFIRM'		=> '¿Está seguro de que quiere borrar todos los mensajes marcados?',
	'DELETE_OLDEST_MESSAGES'		=> 'Borrar mensajes antiguos',
	'DELETE_MESSAGE'				=> 'Borrar mensaje',
	'DELETE_MESSAGE_CONFIRM'		=> '¿Está seguro de que quiere borrar este mensaje privado?',
	'DELETE_MESSAGES_IN_FOLDER'		=> 'Borrar todos los mensajes en la directorio eliminada',
	'DELETE_RULE'					=> 'Borrar regla',
	'DELETE_RULE_CONFIRM'			=> '¿Está seguro de que quiere borrar esta regla?',
	'DEMOTE_SELECTED'				=> 'Degradar Seleccionado',
	'DISABLE_CENSORS'				=> 'Habilitar palabras censuradas',
	'DISPLAY_GALLERY'				=> 'Mostrar galería',
	'DOMAIN_NO_MX_RECORD_EMAIL'		=> 'El dominio del email ingresado no tiene un registro MX válido.',
	'DOWNLOADS'						=> 'Descargas',
	'DRAFTS_DELETED'				=> 'Todos los borradores seleccionados fueron borrados correctamente.',
	'DRAFTS_EXPLAIN'				=> 'Aquí puede ver, editar o borrar sus borradores guardados.',
	'DRAFT_UPDATED'					=> 'Borrador actualizado correctamente.',

	'EDIT_DRAFT_EXPLAIN'			=> 'Aquí podrá editar su borrador. Los borradores no contienen adjuntos ni encuestas.',
	'EMAIL_BANNED_EMAIL'			=> 'La dirección de email que introdujo está excluida.',
	'EMAIL_INVALID_EMAIL'			=> 'La dirección de email que introdujo no es válida.',
	'EMAIL_REMIND'					=> 'Esta debe ser la dirección de email que introdujo al registrarse.',
	'EMAIL_TAKEN_EMAIL'				=> 'La dirección de email introducida ya está en uso',
	'EMPTY_DRAFT'					=> 'Debe introducir un mensaje para enviar los cambios',
	'EMPTY_DRAFT_TITLE'				=> 'Debe introducir un título para el borrador',
	'EXPORT_AS_XML'					=> 'Exportar como XML',
	'EXPORT_AS_CSV'					=> 'Exportar como CSV',
	'EXPORT_AS_CSV_EXCEL'			=> 'Exportar como CSV (Excel)',
	'EXPORT_AS_TXT'					=> 'Exportar como TXT',
	'EXPORT_AS_MSG'					=> 'Exportar como MSG',
	'EXPORT_FOLDER'					=> 'Exportar directorio',

	'FIELD_REQUIRED'				=> 'Debe completar el campo "%s".',
	'FIELD_TOO_SHORT'				=> 'El campo "%1$s" es muy corto, se requiere un mínimo de %2$d caracteres.',
	'FIELD_TOO_LONG'				=> 'El campo "%1$s" es muy largo, se permite un máximo de %2$d caracteres.',
	'FIELD_TOO_SMALL'				=> 'El valor de "%1$s" es muy pequeño, se requiere un valor mínimo de %2$d.',
	'FIELD_TOO_LARGE'				=> 'El valor de "%1$s" es muy grande, se permite un valor máximo de %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'El campo "%s" tiene caracteres inválidos, se permiten sólo números.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'El campo "%s" tiene caracteres inválidos, se permiten sólo caracteres alfanuméricos.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'El campo "%s" tiene caracteres inválidos, se permiten sólo caracteres alfanuméricos, espacio ó -+_[].',
	'FIELD_INVALID_DATE'			=> 'El campo "%s" tiene una fecha no válida.',

	'FOE_MESSAGE'					=> 'Mensaje de un Ignorado',
	'FOES_EXPLAIN'					=> 'Ignorados son usuarios que serán ignorados por defecto. Los mensajes de esos usuarios no serán visibles en su totalidad y no se permitirán mensajes personales. Por favor observe que no puede ignorar moderadores o administradores.',
	'FOES_UPDATED'					=> 'Su lista de Ignorados ha sido actualizada correctamente',
	'FOLDER_ADDED'					=> 'directorio añadida correctamente',
	'FOLDER_MESSAGE_STATUS'			=> '%1$d de %2$d mensajes guardados',
	'FOLDER_NAME_EMPTY'			=> 'Debe introducir un nombre para este directorio.',
	'FOLDER_NAME_EXIST'				=> 'La directorio <strong>%s</strong> ya existe',
	'FOLDER_OPTIONS'				=> 'Opciones de directorio',
	'FOLDER_RENAMED'				=> 'directorio renombrada correctamente',
	'FOLDER_REMOVED'				=> 'directorio eliminada correctamente',
	'FOLDER_STATUS_MSG'				=> 'La directorio está %1$d%% llena, con (%2$d de %3$d mensajes guardados)',
	'FORWARD_PM'					=> 'Reenviar MP',
	'FORCE_PASSWORD_EXPLAIN'		=> 'Antes de continuar navegando por el Sitio se requiere que cambie su contraseña',
	'FRIEND_MESSAGE'				=> 'Mensaje de un amigo',
	'FRIENDS'						=> 'Amigos',
	'FRIENDS_EXPLAIN'				=> 'Amigos le permite un acceso rápido a usuarios con los que se comunica frecuentemente. Si la plantilla lo soporta, los mensajes hechos por amigos serán resaltados.',
	'FRIENDS_OFFLINE'				=> 'Desconectados',
	'FRIENDS_ONLINE'				=> 'Conectados',
	'FRIENDS_UPDATED'				=> 'Su lista de amigos ha sido actualizado correctamente',
	'FULL_FOLDER_OPTION_CHANGED'	=> 'La acción a tomar cuando una directorio llena ha sido cambiada correctamente',
	'FWD_ORIGINAL_MESSAGE'			=> '-------- Mensaje Original --------',
	'FWD_SUBJECT'					=> 'Asunto: %s',
	'FWD_DATE'						=> 'Fecha: %s',
	'FWD_FROM'						=> 'De: %s',
	'FWD_TO'						=> 'Para: %s',

	'GLOBAL_ANNOUNCEMENT'			=> 'Anuncio global',

	'HIDE_ONLINE'					=> 'Ocultar mi estado de conexión',
	'HIDE_ONLINE_EXPLAIN'			=> 'Cambiar esta preferencia no será efectiva hasta su próxima visita al foro.',
	'HOLD_NEW_MESSAGES'				=> 'No aceptar nuevos mensajes (Los mensajes nuevos aguardarán hasta que haya suficiente espacio disponible)',
	'HOLD_NEW_MESSAGES_SHORT'		=> 'Los mensajes nuevos deberán esperar',

	'IF_FOLDER_FULL'				=> 'Si la directorio está llena',
	'IMPORTANT_NEWS'				=> 'Anuncios importantes',
	'INVALID_USER_BIRTHDAY'			=> 'La fecha de nacimiento insertada no es válida.',
	'INVALID_CHARS_USERNAME'		=> 'El nombre de usuario contiene caracteres prohibidos.',
	'INVALID_CHARS_NEW_PASSWORD'	=> 'La contraseña no contiene los caracteres requeridos.',
	'ITEMS_REQUIRED'				=> 'Los elementos marcados con * son campos requeridos del perfil y deben ser completados',

	'JOIN_SELECTED'					=> 'Introducir seleccionados',

	'LANGUAGE'						=> 'Idioma',
	'LINK_REMOTE_AVATAR'			=> 'Enlace externo',
	'LINK_REMOTE_AVATAR_EXPLAIN'	=> 'Introduzca la URL del sitio que contiene la imagen del avatar que desea enlazar.',
	'LINK_REMOTE_SIZE'				=> 'Dimensiones de avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'		=> 'Especifique el ancho y alto del avatar, déjelo en blanco para intentar una verificación automática.',
	'LOGIN_EXPLAIN_UCP'				=> 'Por favor identifíquese para acceder al Panel de Control de Usuario',
	'LOGIN_REDIRECT'				=> 'Se ha identificado correctamente.',
	'LOGOUT_FAILED'					=> 'No ha sido desconectado, la petición no coincide con su sesión. Por favor contacte con el administrador del foro si continúa experimentando problemas.',
	'LOGOUT_REDIRECT'				=> 'Se ha desconectado correctamente.',

	'MARK_IMPORTANT'				=> 'Marcar como importante',
	'MARKED_MESSAGE'				=> 'Mensaje marcado',
	'MAX_FOLDER_REACHED'			=> 'Alcanzado el número máximo permitido de directorios definidas por el usuario',
	'MESSAGE_BY_AUTHOR'				=> 'por',
	'MESSAGE_COLOURS'				=> 'Colores de mensaje',
	'MESSAGE_DELETED'				=> 'Mensaje borrado correctamente',
	'MESSAGE_HISTORY'				=> 'Historial de mensajes',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Este mensaje ha sido removido por su autor antes de ser despachado',
	'MESSAGE_SENT_ON'				=> 'en',
	'MESSAGE_STORED'				=> 'Este mensaje ha sido enviado correctamente',
	'MESSAGE_TO'					=> 'Para',
	'MESSAGES_DELETED'				=> 'Mensajes borrados correctamente',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Mover mensajes de la directorio eliminada a',
	'MOVE_DOWN'						=> 'Bajar',
	'MOVE_MARKED_TO_FOLDER'			=> 'Mover marcados a %s',
	'MOVE_PM_ERROR'					=> 'Ha ocurrido un error mientras movía los mensajes a la directorio nueva, sólo %1d de %2d mensajes fueron movidos.',
	'MOVE_TO_FOLDER'				=> 'Mover a directorio',
	'MOVE_UP'						=> 'Subir',

	'NEW_EMAIL_ERROR'				=> 'La dirección de email que introdujo no coincide.',
	'NEW_FOLDER_NAME'				=> 'Nuevo nombre',
	'NEW_PASSWORD'					=> 'Nueva contraseña',
	'NEW_PASSWORD_ERROR'			=> 'Las contraseñas introducidas no coinciden.',
	'NOTIFY_METHOD'					=> 'Método de notificación',
	'NOTIFY_METHOD_BOTH'			=> 'Ambos',
	'NOTIFY_METHOD_EMAIL'			=> 'Sólo email',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Método para enviar mensajes empleado por este Sitio.',
	'NOTIFY_METHOD_IM'				=> 'Sólo Jabber',
	'NOTIFY_ON_PM'					=> 'Notificarme de nuevos mensajes privados',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'No puede añadir usuarios anónimos a su lista de amigos.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'No puede añadir bots a su lista de amigos.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'No puede añadir usuarios a su lista de amigos mientras estén en su lista de ignorados',
	'NOT_ADDED_FRIENDS_SELF'		=> 'No puede añadir a su lista de amigos',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'No puede añadir administradores y moderadores a su lista de ignorados.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'No puede añadir usuarios anónimos a su lista de ignorados.',
	'NOT_ADDED_FOES_BOTS'			=> 'No puede añadir bots a su lista de ignorados.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'No puede añadir usuarios a su lista de ignorados mientras estén en su lista de amigos.',
	'NOT_ADDED_FOES_SELF'			=> 'No puede añadirse a su lista de ignorados.',
	'NOT_AGREE'						=> 'No estoy de acuerdo',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'La directorio de destino "%s" parece estar llena. La acción requerida no se ha realizado.',
	'NOT_MOVED_MESSAGE'				=> 'Tiene 1 mensaje privado actualmente en espera porque su directorio está llena.',
	'NOT_MOVED_MESSAGES'			=> 'Tiene %d mensajes privados actualmente en espera porque su directorio está llena.',
	'NO_ACTION_MODE'				=> 'No se especificó una acción.',
	'NO_AUTHOR'						=> 'No se definió un autor para este mensaje',
	'NO_AVATAR_CATEGORY'			=> 'Ninguno',

	'NO_AUTH_DELETE_MESSAGE'		=> 'No está autorizado a borrar mensajes privados.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'No está autorizado a editar mensajes privados.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'No está autorizado a reenviar mensajes privados.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'No está autorizado a enviar mensajes privados a grupos.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'No está autorizado a pedir una nueva contraseña.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'No está autorizado a leer mensajes privados que estén en espera.',
	'NO_AUTH_READ_MESSAGE'			=> 'No está autorizado a leer mensajes privados.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'No puede leer este mensaje porque fue eliminado por el autor.',
	'NO_AUTH_SEND_MESSAGE'			=> 'No está autorizado a enviar mensajes privados.',
	'NO_AUTH_SIGNATURE'				=> 'No está autorizado a definir una firma',

	'NO_BCC_RECIPIENT'			=> 'Ninguno',
	'NO_BOOKMARKS'				=> 'No tiene Favoritos',
	'NO_BOOKMARKS_SELECTED'		=> 'No ha seleccionado ningún Favorito',
	'NO_EDIT_READ_MESSAGE'		=> 'El mensaje privado no puede ser editado porque ya ha sido leído.',
	'NO_EMAIL_USER'				=> 'No se puede encontrar al email/usuario enviado',
	'NO_FOES'					=> 'No hay ignorados definidos actualmente',
	'NO_FRIENDS'				=> 'No hay amigos definidos actualmente',
	'NO_FRIENDS_OFFLINE'		=> 'No hay amigos desconectados',
	'NO_FRIENDS_ONLINE'			=> 'No hay amigos identificados',
	'NO_GROUP_SELECTED'			=> 'No se ha especificado un grupo',
	'NO_IMPORTANT_NEWS'			=> 'No hay anuncios importantes',
	'NO_MESSAGE'				=> 'No se puede encontrar un mensaje privado',
	'NO_NEW_FOLDER_NAME'		=> 'Debe especificar un nombre para la directorio',
	'NO_NEWER_PM'				=> 'No hay mensajes nuevos',
	'NO_OLDER_PM'				=> 'No hay mensajes viejos',
	'NO_PASSWORD_SUPPLIED'		=> 'No puede conectarte sin una contraseña.',
	'NO_RECIPIENT'				=> 'No se definió un destinatario',
	'NO_RULES_DEFINED'			=> 'No se definieron reglas',
	'NO_SAVED_DRAFTS'			=> 'No se guardaron borradores',
	'NO_TO_RECIPIENT'			=> 'Ninguno',
	'NO_WATCHED_FORUMS'			=> 'No está observando ningun Foro.',
	'NO_WATCHED_SELECTED'		=> 'No ha seleccionado ningún tema o foro suscrito.',
	'NO_WATCHED_TOPICS'			=> 'No está observando ningun tema.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Las contraseñas deben tener entre %1$d y %2$d caracteres de longitud y deben ser alfanuméricos',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Debe tener entre %1$d y %2$d caracteres.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Las contraseñas deben tener entre %1$d y %2$d caracteres de longitud y mezclar mayúsculas y minúsculas',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Las contraseñas deben tener entre %1$d y %2$d caracteres de longitud y deben contener símbolos',
	'PASSWORD'					=> 'Contraseña',
	'PASSWORD_ACTIVATED'	=> 'Su nueva contraseña ha sido activada',
	'PASSWORD_UPDATED'		=> 'Una nueva contraseña fue enviada a su dirección de correo registrada.',
	'PERMISSIONS_RESTORED'	=> 'Permisos originales restaurados correctamente.',
	'PERMISSIONS_TRANSFERRED'=> 'Permisos de <strong>%s</strong> transferidos correctamente, ahora puede navegar por el foro con los permisos de ese usuario.<br />Por favor tenga en cuenta que los permisos administrativos no han sido transferidos. Puede volver a sus permisos anteriores en cualquier momento.',
	'PM_DISABLED'			=> 'Los mensajes privados han sido deshabilitados en este Sitio',
	'PM_FROM'				=> 'De',
	'PM_FROM_REMOVED_AUTHOR'=> 'Este mensaje fue enviado por un usuario que ya no está registrado.',
	'PM_ICON'				=> 'Icono',
	'PM_INBOX'				=> 'Bandeja de entrada',
	'PM_NO_USERS'			=> 'Los usuarios solicitados para ser añadidos no existen.',
	'PM_OUTBOX'				=> 'Bandeja de salida',
	'PM_SENTBOX'			=> 'Mensajes enviados',
	'PM_SUBJECT'			=> 'Tema del mensaje',
	'PM_TO'					=> 'Enviado a',
	'PM_USERS_REMOVED_NO_PM'=> 'Algunos usuarios no se pueden añadir porque tienen desabilitada la bandeja de mensajes privados.',
	'POPUP_ON_PM'			=> 'Ver nuevos mensajes privados en una ventana emergente',
	'POST_EDIT_PM'			=> 'Editar mensaje privado',
	'POST_FORWARD_PM'		=> 'Reenviar mensaje privado',
	'POST_NEW_PM'			=> 'Enviar mensaje privado',
	'POST_PM_LOCKED'		=> 'El envío de MPs está cerrado.',
	'POST_PM_POST'			=> 'Citar mensaje privado',
	'POST_QUOTE_PM'			=> 'Citar mensaje privado',
	'POST_REPLY_PM'			=> 'Responder mensaje',
	'PRINT_PM'				=> 'Vista de impresión',
	'PREFERENCES_UPDATED'	=> 'Sus preferencias han sido actualizadas.',
	'PROFILE_INFO_NOTICE'	=> 'Por favor tenga en cuenta que esta información será vista por otros usuarios. Sea cuidadoso cuando incluya detalles personales. Los campos marcados con * deben completarse obligatoriamente.',
	'PROFILE_UPDATED'		=> 'Su perfil ha sido actualizado.',

	'RECIPIENT'				=> 'Destinatario',
	'RECIPIENTS'			=> 'Destinatarios',
	'REGISTRATION'			=> 'Registro',
	'RELEASE_MESSAGES'		=> '%sEnviar todos los mensajes en espera%s… serán reordenados en sus directorios correspondientes si hay suficiente espacio disponible.',
	'REMOVE_ADDRESS'		=> 'Eliminar dirección',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'Eliminar Favoritos seleccionados',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '¿Está seguro de que quiere borrar todos los Favoritos seleccionados?',
	'REMOVE_BOOKMARK_MARKED'=> 'Eliminar Favoritos marcados',
	'REMOVE_FOLDER'			=> 'Eliminar directorio',
	'REMOVE_FOLDER_CONFIRM'	=> '¿Está seguro de que quiere eliminar esta directorio?',
	'RENAME'				=> 'Renombrar',
	'RENAME_FOLDER'			=> 'Renombrar directorio',
	'REPLIED_MESSAGE'		=> 'Mensaje respondido a',
	'REPLY_TO_ALL'		=> 'Responder a remitente y todos los destinatarios.',
	'REPORT_PM'			=> 'Informar el mensaje privado',
	'RESIGN_SELECTED'		=> 'Renunciar seleccionados',
	'RETURN_FOLDER'			=> '%1$sVolver a directorio previa%2$s',
	'RETURN_UCP'			=> '%sVolver a Panel de Control de Usuario%s',
	'RULE_ADDED'			=> 'Regla añadida correctamente',
	'RULE_ALREADY_DEFINED'	=> 'Esta regla fue definida previamente',
	'RULE_DELETED'			=> 'Regla eliminada correctamente',
	'RULE_NOT_DEFINED'		=> 'Regla no especificada correctamente',
	'RULE_REMOVED_MESSAGE'	=> 'Un mensaje privado ha sido eliminado debido a los filtros.',
	'RULE_REMOVED_MESSAGES'	=> '%d mensajes privados han sido eliminados debido a los filtros.',

	'SAME_PASSWORD_ERROR'	=> 'La nueva contraseña que ha introducido es la misma que su contraseña actual',
	'SEARCH_YOUR_POSTS'		=> 'Mostrar sus mensajes',
	'SEND_PASSWORD'			=> 'Enviar contraseña',
	'SENT_AT'				=> 'Enviado',			// Usado antes de la fecha en los mensajes privados
	'SHOW_EMAIL'			=> 'Los usuarios pueden contactarme por email',
	'SIGNATURE_EXPLAIN'		=> 'Este es un bloque de texto que puede añadirse a sus mensajes. Hay un límite de %d caracteres',
	'SIGNATURE_PREVIEW'		=> 'Su firma se verá así',
	'SIGNATURE_TOO_LONG'	=> 'Su firma es muy larga.',
	'SORT'					=> 'Ordenar',
	'SORT_COMMENT'			=> 'Comentario',
	'SORT_DOWNLOADS'		=> 'Descargas',
	'SORT_EXTENSION'		=> 'Extensión',
	'SORT_FILENAME'			=> 'Nombre',
	'SORT_POST_TIME'		=> 'Fecha',
	'SORT_SIZE'				=> 'Tamaño',

	'TIMEZONE'				=> 'Zona horaria',
	'TO'					=> 'Para',
	'TOO_MANY_RECIPIENTS'	=> 'Intentó enviar un mensaje privado a demasiados destinatarios',
	'TOO_MANY_REGISTERS'	=> 'Ha excedido el número máximo de intentos de registros para esta sesión. Por favor inténtelo más tarde.',

	'UCP'					=> 'Panel de Control de Usuario',
	'UCP_ACTIVATE'			=> 'Activar cuenta',
	'UCP_ADMIN_ACTIVATE'	=> 'Por favor observe que necesita introducir una dirección de email válida antes de que su cuenta sea activada. El administrador revisará su cuenta y si la aprueba, recibirá un email en la direccion que introdujo.',
	'UCP_AIM'				=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'		=> 'Adjuntos',
	'UCP_COPPA_BEFORE'		=> 'Antes %s',
	'UCP_COPPA_ON_AFTER'	=> 'O después %s',
	'UCP_EMAIL_ACTIVATE'	=> 'Por favor observe que necesita ingresar una dirección de email válida para que su cuenta sea activada. Recibirá un email en la dirección que introdujo que contiene un enlace para la activación de la cuenta.',
	'UCP_ICQ'				=> 'Número de ICQ',
	'UCP_JABBER'			=> 'Dirección Jabber',

	'UCP_MAIN'				=> 'Vista General',
	'UCP_MAIN_ATTACHMENTS'	=> 'Organizar adjuntos',
	'UCP_MAIN_BOOKMARKS'	=> 'Organizar Favoritos',
	'UCP_MAIN_DRAFTS'		=> 'Organizar borradores',
	'UCP_MAIN_FRONT'		=> 'Página principal',
	'UCP_MAIN_SUBSCRIBED'	=> 'Organizar suscripciones',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'	=> 'No ha enviado adjuntos',

	'UCP_PREFS'				=> 'Preferencias de Foros',
	'UCP_PREFS_PERSONAL'	=> 'Editar preferencias personales',
	'UCP_PREFS_POST'		=> 'Editar preferencias de mensajes',
	'UCP_PREFS_VIEW'		=> 'Editar preferencias de visualización',

	'UCP_PM'				=> 'Mensajes privados',
	'UCP_PM_COMPOSE'		=> 'Escribir mensaje',
	'UCP_PM_DRAFTS'			=> 'Organizar borradores',
	'UCP_PM_OPTIONS'		=> 'Editar opciones',
	'UCP_PM_POPUP'			=> 'Mensajes privados',
	'UCP_PM_POPUP_TITLE'	=> 'Popup de mensajes privados',
	'UCP_PM_UNREAD'			=> 'Mensajes sin leer',
	'UCP_PM_VIEW'			=> 'Ver mensajes',

	'UCP_PROFILE'				=> 'Perfil',
	'UCP_PROFILE_AVATAR'		=> 'Editar avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Editar perfil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Editar opciones de cuenta',
	'UCP_PROFILE_SIGNATURE'		=> 'Editar firma',

	'UCP_USERGROUPS'		=> 'Grupos de Usuarios',
	'UCP_USERGROUPS_MEMBER'	=> 'Editar usuarios',
	'UCP_USERGROUPS_MANAGE'	=> 'Administrar grupos',

	'UCP_REGISTER_DISABLE'	=> 'Crear una nueva cuenta no es posible actualmente.',
	'UCP_REMIND'	=> 'Enviar contraseña',
	'UCP_RESEND'	=> 'Enviar email de activación',
	'UCP_WELCOME'	=> 'Bienvenido al Panel de Control de Usuario. Desde aquí puede observar y actualizar su perfil, preferencias, suscripción a foros y temas. También puede enviar mensajes a otros usuarios (si está permitido). Por favor lea todos los anuncios antes de continuar.',
	'UCP_YIM'	=> 'Yahoo Messenger',
	'UCP_ZEBRA'	=> 'Amigos e Ignorados',
	'UCP_ZEBRA_FOES'	=> 'Organizar Ignorados',
	'UCP_ZEBRA_FRIENDS'	=> 'Organizar amigos',
	'UNKNOWN_FOLDER'	=> 'directorio desconocida',
	'UNWATCH_MARKED'	=> 'No seguir marcados',
	'UPLOAD_AVATAR_FILE'	=> 'Subir desde su PC',
	'UPLOAD_AVATAR_URL'	=> 'Subir desde una URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> 'Introduzca la URL del sitio que tiene la imagen, será copiada a este sitio.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'El nombre de usuario debe tener entre %1$d y %2$d caracteres de longitud y ser solamente alfanuméricos',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'	=> 'El nombre de usuario debe tener entre %1$d y %2$d caracteres de longitud y ser solamente alfanuméricos, espacio o -+_[].',
	'USERNAME_ASCII_EXPLAIN'	=> 'El nombre de usuario debe tener entre %1$d y %2$d caracteres de longitud y ser solamente ASCII, sin símbolos especiales',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'El nombre de usuario debe tener entre %1$d y %2$d caracteres de longitud y ser solamente letras o números',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'El nombre de usuario debe tener entre %1$d y %2$d caracteres de longitud y ser solamente letras, números, espacio o -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'La longitud debe ser entre %1$d y %2$d caracteres.',
	'USERNAME_TAKEN_USERNAME'	=> 'El nombre de usuario que introdujo ya está en uso, por favor elija otro.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'El nombre de usuario que introdujo ha sido excluido.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'No se puede encontrar a ese usuario, o aún no ha sido activado.',

	'VIEW_AVATARS'			=> 'Mostrar avatares',
	'VIEW_EDIT'				=> 'Ver/Editar',
	'VIEW_FLASH'			=> 'Mostrar animaciones Flash',
	'VIEW_IMAGES'			=> 'Mostrar imagenes en los mensajes',
	'VIEW_NEXT_HISTORY'		=> 'Siguiente MP en historial',
	'VIEW_NEXT_PM'			=> 'Siguiente MP',
	'VIEW_PM'				=> 'Ver mensaje',
	'VIEW_PM_INFO'			=> 'Detalles',
	'VIEW_PM_MESSAGE'		=> '1 mensaje',
	'VIEW_PM_MESSAGES'		=> '%d mensajes',
	'VIEW_PREVIOUS_HISTORY'	=> 'MP previo en historial',
	'VIEW_PREVIOUS_PM'		=> 'MP previo ',
	'VIEW_SIGS'				=> 'Mostrar firmas',
	'VIEW_SMILIES'			=> 'Mostrar emoticonos como imagenes',
	'VIEW_TOPICS_DAYS'		=> 'Mostrar temas de días previos',
	'VIEW_TOPICS_DIR'		=> 'Mostrar ordenamiento de temas',
	'VIEW_TOPICS_KEY'		=> 'Mostrar temas ordenados por',
	'VIEW_POSTS_DAYS'		=> 'Mostrar mensajes de días previos',
	'VIEW_POSTS_DIR'		=> 'Mostrar ordenamiento de mensajes',
	'VIEW_POSTS_KEY'		=> 'Mostrar mensajes ordenados por',

	'WATCHED_EXPLAIN'	=> 'Debajo está la lista de foros y temas a los que está suscrito. Será notificado de nuevos mensajes en ellos. Para cancelar la suscripción marque el foro o tema y luego haga clic en el botón <em>No seguir marcados</em>.',
	'WATCHED_FORUMS'	=> 'Foros suscritos',
	'WATCHED_TOPICS'	=> 'Temas suscritos',
	'WRONG_ACTIVATION'	=> 'La contraseña de activación proporcionada no coincide con ninguna en la base de datos',

	'YOUR_DETAILS'			=> 'Su actividad',
	'YOUR_FOES'				=> 'Sus ignorados',
	'YOUR_FOES_EXPLAIN'		=> 'Para eliminar nombres de usuarios selecciónelos y luego haga clic en Enviar',
	'YOUR_FRIENDS'			=> 'Sus amigos',
	'YOUR_FRIENDS_EXPLAIN'	=> 'Para eliminar nombres de usuarios selecciónelos y luego haga clic en Enviar',
	'YOUR_WARNINGS'			=> 'Sus advertencias',

	'PM_ACTION'	=> array(
		'PLACE_INTO_FOLDER'	=> 'Poner en directorio',
		'MARK_AS_READ'		=> 'Marcar como leído',
		'MARK_AS_IMPORTANT'	=> 'Marcar mensaje',
		'DELETE_MESSAGE'	=> 'Borrar mensaje',
	),
	'PM_CHECK'	=> array(
		'SUBJECT'	=> 'Tema',
		'SENDER'	=> 'Remitente',
		'MESSAGE'	=> 'Mensaje',
		'STATUS'	=> 'Estado',
		'TO'	=> 'Enviar a',
	),
	'PM_RULE'	=> array(
		'IS_LIKE'		=> 'contiene',
		'IS_NOT_LIKE'	=> 'no contiene',
		'IS'			=> 'es',
		'IS_NOT'		=> 'no es',
		'BEGINS_WITH'	=> 'comienza con',
		'ENDS_WITH'		=> 'termina con',
		'IS_FRIEND'		=> 'es amigo',
		'IS_FOE'		=> 'es un Ignorado',
		'IS_USER'		=> 'es usuario',
		'IS_GROUP'		=> 'está en el grupo',
		'ANSWERED'		=> 'respondido',
		'FORWARDED'		=> 'reenviado',
		'TO_GROUP'		=> 'a mi grupo por defecto',
		'TO_ME'			=> 'a mi',
	),


	'GROUPS_EXPLAIN'	=> 'Los Grupos permiten a los administradores manejar mejor a los usuarios. Por defecto estará en un grupo específico, este es su grupo por defecto. Este grupo define como le ven los otros usuarios, por ejemplo color del nombre, avatar, rango, etc. Dependiendo de lo que el administrador permita podrás cambiar cambiar su grupo por defecto. Tambien podras ser situado o permitirte ingresar a otros grupos. Algunos grupos pueden otorgarte derechos extra para ver contenido o aumentar sus capacidades en otras áreas.',
	'GROUP_LEADER'		=> 'Líderes',
	'GROUP_MEMBER'		=> 'Usuarios',
	'GROUP_PENDING'		=> 'Membresías pendientes',
	'GROUP_NONMEMBER'	=> 'No-usuarios',
	'GROUP_DETAILS'		=> 'Detalles del Grupo',

	'NO_LEADER'		=> 'Sin líder',
	'NO_MEMBER'		=> 'Sin usuarios',
	'NO_PENDING'	=> 'Sin membresías pendientes',
	'NO_NONMEMBER'	=> 'Sin grupo de no-usuarios',
));

?>