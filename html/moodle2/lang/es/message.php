<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'message', language 'es', branch 'MOODLE_23_STABLE'
 *
 * @package   message
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontact'] = 'Añadir contacto';
$string['addsomecontacts'] = 'Para enviar un mensaje a alguien, o para añadir un atajo en esta página, utilice la pestaña <a href="{$a}">Buscar</a> de más arriba.';
$string['addsomecontactsincoming'] = 'Estos mensajes provienen de personas que no están en su lista de contactos. Para agregarlos a sus contactos, haga clic en el icono "Agregar contacto" al lado de su nombre.';
$string['ago'] = 'hace {$a}';
$string['ajax_gui'] = 'Sala de chat Ajax';
$string['allmine'] = 'Todos los mensajes';
$string['allstudents'] = 'Todos los mensajes entre los estudiantes del curso';
$string['allusers'] = 'Todos los mensajes de todos los usuarios';
$string['backupmessageshelp'] = 'Si se activa, los mensajes instantáneos serán incluídos en las copias automatizadas del SITIO';
$string['beepnewmessage'] = '\'Beep\' cuando llegue un mensaje nuevo';
$string['blockcontact'] = 'Bloquear contacto';
$string['blockedmessages'] = '{$a} mensaje(s) hacia/de usuarios bloqueados';
$string['blockedusers'] = 'Usuarios bloqueados ({$a})';
$string['blocknoncontacts'] = 'Bloquear mensajes de usuarios que no figuren en mi lista de contactos';
$string['contactlistempty'] = 'Su lista de contactos está vacía';
$string['contacts'] = 'Contactos';
$string['context'] = 'contexto';
$string['couldnotfindpreference'] = 'No se pudo cargar la preferencia {$a}. ¿Coinciden el componente y el nombre que Usted proporcionó a message_send() con la fila en message_providers? Los provedores de mensajes deben aparecer en la base de datos para que los usuarios puedan configurar cómo serán notificados cuando reciban mensajes.';
$string['defaultmessageoutputs'] = 'Mensajes de salida por defecto';
$string['deletemessagesdays'] = 'Número de días antes de eliminar automáticamente los mensajes antiguos';
$string['disableall'] = 'Desactivar temporalmente las notificaciones';
$string['disableall_help'] = 'Temporalmente desactiva todas las notificaciones excepto aquellas que hayan sido marcadas como "obligatorias" por el administrador del sitio';
$string['disabled'] = 'La mensajería está deshabilitada en este sitio';
$string['disallowed'] = 'Deshabilitado';
$string['discussion'] = 'Discusión';
$string['editmymessage'] = 'Mensajería';
$string['emailmessages'] = 'Mensajes por email cuando no estoy en línea';
$string['emailtagline'] = 'Ésta es una copia del mensaje que se le ha enviado en "{$a->sitename}". Vaya a {$a->url} para contestar.';
$string['emptysearchstring'] = 'Debe buscar algo';
$string['errorcallingprocessor'] = 'Error al llamar al procesador definido';
$string['errortranslatingdefault'] = 'Error al traducir la configuración por defecto proporcionada por la extensión (plugin), por lo que se emplean configuraciones del sistema por defecto en su lugar.';
$string['forced'] = 'Forzada';
$string['formorethan'] = 'Durante más de';
$string['gotomessages'] = 'Ir a mensajes';
$string['guestnoeditmessage'] = 'Los invitados no pueden editar las opciones de mensajería';
$string['guestnoeditmessageother'] = 'Los invitados no pueden editar las opciones de mensajería de otro usuario';
$string['includeblockedusers'] = 'Incluir usuarios bloqueados';
$string['incomingcontacts'] = 'Contactos Entrantes ({$a})';
$string['keywords'] = 'Palabras-clave';
$string['keywordssearchresults'] = '{$a} mensajes encontrados';
$string['keywordssearchresultstoomany'] = 'Se han encontrado más de ({$a}) mensajes. Refine su búsqueda.';
$string['loggedin'] = 'En línea';
$string['loggedindescription'] = 'Cuando estoy conectado en';
$string['loggedoff'] = 'No en línea';
$string['loggedoffdescription'] = 'Cuando estoy fuera de línea';
$string['mailsent'] = 'Su mensaje se ha enviado por email.';
$string['managecontacts'] = 'Gestionar mis contactos';
$string['managemessageoutputs'] = 'Gestionar mensajes de salida';
$string['maxmessages'] = 'Número máximo de mensajes para mostrar en la historia de la discusión';
$string['message'] = 'Mensaje';
$string['messagehistory'] = 'Historia de mensajes';
$string['messagehistoryfull'] = 'Todos los mensajes';
$string['messageoutputs'] = 'Mensajes de salida';
$string['messages'] = 'Mensajes';
$string['messaging'] = 'Mensajería';
$string['messagingdisabled'] = 'El servicio de mensajería está deshabilitado en este sitio: se enviarán correos electrónicos en lugar de mensajes';
$string['mostrecent'] = 'Mensajes recientes';
$string['mostrecentconversations'] = 'Conversaciones recientes';
$string['mostrecentnotifications'] = 'Notificaciones recientes';
$string['mycontacts'] = 'Mis contactos';
$string['newonlymsg'] = 'Mostrar sólo nuevos';
$string['newsearch'] = 'Nueva búsqueda';
$string['noframesjs'] = 'Usar interfaz más accesible';
$string['nomessages'] = 'No hay mensajes en espera';
$string['nomessagesfound'] = 'No se encontraron mensajes';
$string['noreply'] = 'No contestar a este mensaje';
$string['nosearchresults'] = 'La búsqueda no produjo resultados';
$string['offline'] = 'Fuera de línea';
$string['offlinecontacts'] = 'Contactos fuera de línea ({$a})';
$string['online'] = 'En línea';
$string['onlinecontacts'] = 'Contactos en línea ({$a})';
$string['onlyfromme'] = 'Sólo mensajes enviados por mí';
$string['onlymycourses'] = 'Sólo en mis cursos';
$string['onlytome'] = 'Sólo mensajes dirigidos a mí';
$string['outputdisabled'] = 'Salida deshabilitada';
$string['outputdoesnotexist'] = 'No existe salida de mensaje';
$string['outputenabled'] = 'Salida habilitada';
$string['outputnotavailable'] = 'No disponible';
$string['outputnotconfigured'] = 'No configurada';
$string['page-message-x'] = 'Cualquier página de mensajes';
$string['pagerefreshes'] = 'Esta página se actualiza automáticamente cada {$a} segundos';
$string['permitted'] = 'Permitida';
$string['private_config'] = 'Opciones de Mensajería Privada';
$string['processordeleteconfirm'] = 'Esta a punto de eliminar completamente el mensaje de salida \'{$a}\'. En la base de datos se eliminará completamente toda la información asociada con este elemento. ¿Está seguro que quier continuar?';
$string['processordeletefiles'] = 'Todos los datos asociados con la salida \'{$a->processor}\' han sido borrados de la base de datos. Para completar la acción de borrar ( y evitar que la salida se re-instale por sí misma), Usted debe ahora de borrar este directorio de su servidor: {$a->directory}';
$string['processortag'] = 'Destino:';
$string['providers_config'] = 'Configurar los métodos de notificación para los mensajes entrantes';
$string['providerstag'] = 'Fuente:';
$string['readmessages'] = '{$a} mensajes leídos';
$string['recent'] = 'Reciente';
$string['removecontact'] = 'Eliminar contacto';
$string['savemysettings'] = 'Guardar mis ajustes';
$string['search'] = 'Buscar';
$string['searchcombined'] = 'Buscar personas y mensajes';
$string['searchforperson'] = 'Buscar una persona';
$string['searchmessages'] = 'Buscar mensajes';
$string['sendingvia'] = 'Mandando "{$a->provider}" via "{$a->processor}"';
$string['sendingviawhen'] = 'Mandando "{$a->provider}" via "{$a->processor}" cuando {$a->state}';
$string['sendmessage'] = 'Enviar mensaje';
$string['sendmessageto'] = 'Enviar mensaje a {$a}';
$string['sendmessagetopopup'] = 'Enviar mensaje a {$a} - ventana nueva';
$string['settings'] = 'Ajustes';
$string['settingssaved'] = 'Sus ajustes han sido guardados';
$string['showmessagewindow'] = 'Ventana emergente cuando hay un mensaje nuevo';
$string['strftimedaydatetime'] = '%A, %d %B %Y, %I:%M %p';
$string['thisconversation'] = 'esta conversación';
$string['timenosee'] = 'Minutos desde que estuve en línea por última vez';
$string['timesent'] = 'Hora de envío';
$string['touserdoesntexist'] = 'Usted no puede mandar un mensaje a un usuario cuya id ({$a}) no existe';
$string['unblockcontact'] = 'Desbloquear contacto';
$string['unreadmessages'] = '{$a} mensajes sin leer';
$string['unreadnewmessage'] = 'Mensaje nuevo de ({$a})';
$string['unreadnewmessages'] = '({$a}) nuevos mensajes';
$string['unreadnewnotification'] = 'Nueva notificación';
$string['unreadnewnotifications'] = 'Nuevas notificaciones ({$a})';
$string['userisblockingyou'] = 'Este usuario le ha bloqueado y no puede enviarle mensajes';
$string['userisblockingyounoncontact'] = 'Este usuario sólo acepta mensajes de las personas que están en su lista de contactos, y usted no figura de momento en dicha lista.';
$string['userssearchresults'] = '{$a} usuarios encontrados';