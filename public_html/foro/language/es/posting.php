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
* posting.php [Spanish [Es]]
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Subir adjunto',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Si quiere adjuntar uno o más archivos introduzca los detalles debajo',
	'ADD_FILE'					=> 'Agregar archivo',
	'ADD_POLL'					=> 'Agregar encuesta',
	'ADD_POLL_EXPLAIN'			=> 'Si no quiere agregar una encuesta a su tema, deje los campos en blanco',
	'ALREADY_DELETED'			=> 'Disculpe, este mensaje ya ha sido borrado.',
	'ATTACH_QUOTA_REACHED'		=> 'Disculpe, la cuota de adjuntos del Sitio está a tope.',
	'ATTACH_SIG'				=> 'Adjuntar firma (las firmas se pueden modificar en el Panel de Control de Usuario)',

	'BBCODE_A_HELP'				=> 'Insertar adjunto: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Texto en negrita: [b]texto[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Mostrar código: [code]código[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Lista: Añadir elemento a la lista',
	'BBCODE_F_HELP'				=> 'Tamaño de fuente: [size=x-small]texto pequeño[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s está <em>deshabilitado</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s está <em>habilitado</em>',
	'BBCODE_I_HELP'				=> 'Texto Itálica: [i]texto[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Lista: [list]texto[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'		=> 'Listar ítem: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Lista ordenada: [list=]texto[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Inserta imagen: [img]http://imagen_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citar texto: [quote]texto[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Color de fuente: [color=red]texto[/color]  Tip: puede usar código de color=#FF0000',
	'BBCODE_U_HELP'				=> 'Texto subrayado: [u]texto[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Insertar URL: [url]http://url[/url] ó [url=http://url]URL texto[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'No puede activar este tema tan pronto.',

	'CANNOT_DELETE_REPLIED'		=> 'Disculpe, solamente puede borrar mensajes que no hayan sido respondidos.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Este mensaje ha sido cerrado. Ya no puede editar este mensaje.',
	'CANNOT_EDIT_TIME'			=> 'Ya no puede editar o borrar este mensaje',
	'CANNOT_POST_ANNOUNCE'		=> 'Disculpe, no puede publicar anuncios.',
	'CANNOT_POST_STICKY'		=> 'Disculpe, no puede publicar temas fijos.',
	'CHANGE_TOPIC_TO'			=> 'Cambiar tipo de tema a',
	'CLOSE_TAGS'				=> 'Cerrar etiquetas',
	'CURRENT_TOPIC'				=> 'Tema actual',

	'DELETE_FILE'				=> 'Borrar archivo',
	'DELETE_MESSAGE'			=> 'Borrar mensaje',
	'DELETE_MESSAGE_CONFIRM'	=> '¿Está seguro de que quiere borrar este mensaje?',
	'DELETE_OWN_POSTS'			=> 'Disculpe, solo puede borrar sus propios mensajes.',
	'DELETE_POST_CONFIRM'		=> '¿Está seguro de que quiere borrar este hilo de mensajes?',
	'DELETE_POST_WARN'			=> 'Una vez borrado, el hilo de mensajes no puede recuperarse',
	'DISABLE_BBCODE'			=> 'Deshabilitar BBCode',
	'DISABLE_MAGIC_URL'			=> 'No convertir automáticamente las URLs',
	'DISABLE_SMILIES'			=> 'Deshabilitar emoticonos',
	'DISALLOWED_CONTENT'		=> 'La subida fue rechazada porque el archivo a subir fue identificado como un posible vector de ataque.',
	'DISALLOWED_EXTENSION'		=> 'La extensión %s no está permitida',
	'DRAFT_LOADED'				=> 'Borrador subido al área de envío. ¿Quiere terminar su mensaje ahora?<br />Su borrador será eliminado después de enviar el mensaje.',
	'DRAFT_LOADED_PM'			=> 'Borrador subido en área de mensajes, puede terminarlo ahora.<br />Su borrador será borrado después de enviar este mensaje privado.',
	'DRAFT_SAVED'				=> 'Borrador guardado correctamente.',
	'DRAFT_TITLE'				=> 'Título del borrador',

	'EDIT_REASON'				=> 'Razón para editar este mensaje',
	'EMPTY_FILEUPLOAD'			=> 'El archivo subido está vacío',
	'EMPTY_MESSAGE'				=> 'Tiene que enviar un mensaje cuando publique.',
	'EMPTY_REMOTE_DATA'			=> 'Imposible subir el archivo, por favor, intente subirlo manualmente.',

	'FLASH_IS_OFF'				=> '[flash] está <em>deshabilitado</em>',
	'FLASH_IS_ON'				=> '[flash] está <em>habilitado</em>',
	'FLOOD_ERROR'				=> 'No puede enviar otro mensaje tan pronto.',
	'FONT_COLOR'				=> 'Color de fuente',
	'FONT_COLOR_HIDE'			=> 'Ocultar color de fuente',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Tamaño de fuente',
	'FONT_SMALL'				=> 'Pequeña',
	'FONT_TINY'					=> 'Diminuta',

	'GENERAL_UPLOAD_ERROR'		=> 'Imposible subir el adjunto a %s',

	'IMAGES_ARE_OFF'			=> '[img] está <em>deshabilitado</em>',
	'IMAGES_ARE_ON'				=> '[img] está <em>habilitado</em>',
	'INVALID_FILENAME'			=> '%s es un nombre de archivo inválido',

	'LOAD'						=> 'Cargar',
	'LOAD_DRAFT'				=> 'Cargar borrador',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aquí puede seleccionar el borrador que quiera continuar redactando. Su mensaje actual será cancelado, el contenido será borrado. Puede ver, borrar y editar borradores en su Panel de Control de Usuario.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Necesita identificarse para activar temas en este foro.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Necesita identificarse para borrar mensajes en este foro.',
	'LOGIN_EXPLAIN_POST'		=> 'Necesita identificarse para enviar mensajes en este foro.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Necesita identificarse para citar mensajes en este foro.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Necesita identificarse para responder temas en este foro.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Solo puede usar fuentes de un tamaño hasta %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Sus archivos flash solo pueden ser hasta %1$d pixeles de alto.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Sus archivos flash solo pueden ser hasta %1$d pixeles de ancho.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Sus imagenes solo pueden ser hasta %1$d pixeles de alto.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Sus imagenes solo pueden ser hasta %1$d pixeles de ancho.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Introduzca su mensaje aquí, no puede tener más de <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'			=> 'Este mensaje ha sido borrado correctamente',
	'MORE_SMILIES'				=> 'Ver más emoticonos',

	'NOTIFY_REPLY'				=> 'Enviarme un email cuando un mensaje es respondido',
	'NOT_UPLOADED'				=> 'El archivo no se pudo subir.',
	'NO_DELETE_POLL_OPTIONS'	=> 'No puede borrar las opciones existentes de la encuesta',
	'NO_PM_ICON'				=> 'Sin icono',
	'NO_POLL_TITLE'				=> 'Tiene que poner un título a la encuesta',
	'NO_POST'					=> 'El mensaje requerido no existe.',
	'NO_POST_MODE'				=> 'No se especificó el modo de mensaje',

	'PARTIAL_UPLOAD'			=> 'El archivo fue solo parcialmente subido',
	'PHP_SIZE_NA'				=> 'El tamaño del archivo adjunto es muy grande.<br />No se puede determinar el tamaño máximo definido por PHP en php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'El tamaño del archivo adjunto es muy grande, el tamaño máximo de subida es %1$d %2$s.<br />Por favor tenga en cuenta que está definido en php.ini y no puede ser cambiado.',
	'PLACE_INLINE'				=> 'Insertar en texto',
	'POLL_DELETE'				=> 'Borrar encuesta',
	'POLL_FOR'					=> 'Hacer encuesta para',
	'POLL_FOR_EXPLAIN'			=> 'Introduzca 0 ó deje en blanco para una encuesta sin límite de tiempo',
	'POLL_MAX_OPTIONS'			=> 'Opciones por usuario',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Éste es el número de opciones que cada usuario puede seleccionar cuando vota.',
	'POLL_OPTIONS'				=> 'Opciones de encuesta',
	'POLL_OPTIONS_EXPLAIN'		=> 'Coloque cada opción en una nueva línea. Puede introducir hasta <strong>%d</strong> opciones',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Coloque cada opción en una nueva línea. Puede introducir hasta <strong>%d</strong> opciones. Si eliminas o añades opciones todos los votos previos se resetearán.',
	'POLL_QUESTION'				=> 'Pregunta de la encuesta',
	'POLL_TITLE_TOO_LONG'		=> 'El título de la encuesta debe tener menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'El título de la encuesta es demasiado largo, puede eliminar BBcode o emoticonos.',
	'POLL_VOTE_CHANGE'			=> 'Permitir cambiar el voto',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Si está habilitado, los usuarios pueden cambiar su voto.',
	'POSTED_ATTACHMENTS'		=> 'Adjuntos publicados',
	'POST_APPROVAL_NOTIFY'		=> 'Se le notificará cuando su mensaje sea aprobado.',
	'POST_CONFIRMATION'			=> 'Confirmación del mensaje',
	'POST_CONFIRM_EXPLAIN'		=> 'Para prevenir posteos automáticos el administrador del Sitio requiere que ingrese un código de confirmación. El código es mostrado en la imagen que debería ver debajo. Si tiene problemas de visión, o de alguna manera no puede leer el código por favor contacte con la %sAdministración del Foro%s.',
	'POST_DELETED'				=> 'Este mensaje ha sido borrado correctamente',
	'POST_EDITED'				=> 'Este mensaje ha sido editado correctamente',
	'POST_EDITED_MOD'			=> 'Este mensaje ha sido editado, pero requiere aprobación',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icono del mensaje',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisar el mensaje',
	'POST_REVIEW_EDIT'			=> 'Revisión del mensaje',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Este mensaje ha sido modificado por otro usuario mientras usted estaba editándolo. Puede querer revisar la versión actual de este mensaje y ajustar sus modificaciones.',
	'POST_REVIEW_EXPLAIN'		=> 'Al menos una revisión ha sido hecha a este mensaje. Tal vez quiera volver a ver su mensaje.',
	'POST_STORED'				=> 'Este mensaje ha sido publicado correctamente.',
	'POST_STORED_MOD'			=> 'El mensaje ha sido guardado pero requiere aprobación.',
	'POST_TOPIC_AS'				=> 'Tema como',
	'PROGRESS_BAR'				=> 'Barra de progreso',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Puede anidar solo %1$d citas una dentro de otra.',

	'SAVE'						=> 'Guardar',
	'SAVE_DATE'					=> 'Guardado como',
	'SAVE_DRAFT'				=> 'Guardar borrador',
	'SAVE_DRAFT_CONFIRM'		=> 'Por favor tenga en cuenta que los borradores guardados solo incluyen el tema y el mensaje, cualquier otro elemento será eliminado. ¿Quiere guardar su borrador ahora?',
	'SMILIES'					=> 'Emoticonos',
	'SMILIES_ARE_OFF'			=> 'Emoticonos están <em>deshabilitados</em>',
	'SMILIES_ARE_ON'			=> 'Emoticonos están <em>habilitados</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Fecha límite para Fijo/Anuncio',
	'STICK_TOPIC_FOR'			=> 'Fijar tema para',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Introduzca 0 ó deje en blanco para un Fijo/Anuncio sin límite de tiempo. Por favor tenga en cuenta que este número está relacionado con la fercha de publicación del mensaje.',
	'STYLES_TIP'				=> 'Consejo: Pueden aplicarse estilos rápidamente al texto seleccionado',

	'TOO_FEW_CHARS'				=> 'Su mensaje contiene muy pocos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Su mensaje contiene %1$d caracteres. El número mínimo de caracteres que necesita introducir es %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Tiene que introducir al menos dos opciones para la encuesta',
	'TOO_MANY_ATTACHMENTS'		=> 'No puede añadir otro adjunto, %d es el máximo.',
	'TOO_MANY_CHARS'			=> 'Su mensaje contiene demasiados caracteres.',
	'TOO_MANY_CHARS_POST'		=> 'Su mensaje contiene %1$d caracteres. El máximo número de caracteres permitidos es %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Su firma contiene %1$d caracteres. El máximo número de caracteres permitidos es %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Intenta introducir demasiadas opciones para la encuesta',
	'TOO_MANY_SMILIES'			=> 'Su mensaje contiene demasiados emoticonos. El número máximo de emoticonos permitidos es %d.',
	'TOO_MANY_URLS'				=> 'Su mensaje contiene demasiadas URLs. El número máximo de URLs permitidas es %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'No puede especificar más opciones por usuario que la cantidad de opciones de la encuesta',
	'TOPIC_BUMPED'				=> 'El tema ha sido reactivado correctamente',

	'UNAUTHORISED_BBCODE'		=> 'No puede usar ciertos BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'Para volver este tema de global a normal ha de seleccionar el foro en el que quiere mostrarlo.',
	'UPDATE_COMMENT'			=> 'Actualizar comentario',
	'URL_INVALID'				=> 'La URL que especificó es inválida.',
	'URL_NOT_FOUND'				=> 'No se puede encontrar el archivo especificado.',
	'URL_IS_OFF'				=> '[url] está <em>deshabilitado</em>',
	'URL_IS_ON'					=> '[url] está <em>habilitado</em>',
	'USER_CANNOT_BUMP'			=> 'No puede activar temas en este Foro',
	'USER_CANNOT_DELETE'		=> 'No puede borrar temas en este Foro',
	'USER_CANNOT_EDIT'			=> 'No puede editar mensajes en este Foro',
	'USER_CANNOT_REPLY'			=> 'No puede responder en este Foro',
	'USER_CANNOT_FORUM_POST'	=> 'No puede realizar esa operación en este Foro debido a que el tipo de Foro no lo soporta.',

	'VIEW_MESSAGE'				=> '%1$sVer el mensaje enviado%2$s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer su mensaje privado enviado%s',

	'WRONG_FILESIZE'			=> 'El archivo es muy grande, el tamaño máximo permitido es %1d %2s',
	'WRONG_SIZE'				=> 'La imagen debe tener al menos %1$d pixeles de ancho, %2$d pixeles de alto y a lo sumo %3$d pixeles de ancho y %4$d pixeles de alto. La imagen enviada tiene %5$d pixeles de ancho y %6$d pixeles de alto.',
));

?>