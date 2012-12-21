<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
* The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings= array (
'LBL_MODULE_NAME'                                  => 'Tareas',
'LBL_TASK'                                         => 'Tareas: ',
'LBL_MODULE_TITLE'                                 => ' Tareas: Inicio',
'LBL_SEARCH_FORM_TITLE'                            => ' Búsqueda de Tareas',
'LBL_LIST_FORM_TITLE'                              => ' Lista de Tareas',
'LBL_NEW_FORM_TITLE'                               => ' Nueva Tarea',
'LBL_NEW_FORM_SUBJECT'                             => 'Asunto:',
'LBL_NEW_FORM_DUE_DATE'                            => 'Fecha Vencimiento:',
'LBL_NEW_FORM_DUE_TIME'                            => 'Hora Vencimiento:',
'LBL_NEW_TIME_FORMAT'                              => '(24:00)',
'LBL_LIST_CLOSE'                                   => 'Cerrar',
'LBL_LIST_SUBJECT'                                 => 'Asunto',
'LBL_LIST_CONTACT'                                 => 'Contacto',
'LBL_LIST_PRIORITY'                                => 'Prioridad',
'LBL_LIST_RELATED_TO'                              => 'Relacionado con',
'LBL_LIST_DUE_DATE'                                => 'Fecha Vencimiento',
'LBL_LIST_DUE_TIME'                                => 'Hora Vencimiento',
'LBL_SUBJECT'                                      => 'Asunto:',
'LBL_STATUS'                                       => 'Estado:',
'LBL_DUE_DATE'                                     => 'Fecha vencimiento:',
'LBL_DUE_TIME'                                     => 'Hora vencimiento:',
'LBL_PRIORITY'                                     => 'Prioridad:',
'LBL_COLON'                                        => ':',
'LBL_DUE_DATE_AND_TIME'                            => 'Fecha y hora de vencimiento:',
'LBL_START_DATE_AND_TIME'                          => 'Fecha y hora de inicio:',
'LBL_START_DATE'                                   => 'Fecha de inicio:',
'LBL_LIST_START_DATE'                              => 'Fecha de inicio',
'LBL_START_TIME'                                   => 'Hora de inicio:',
'LBL_LIST_START_TIME'                              => 'Hora de inicio',
'DATE_FORMAT'                                      => '(yyyy-mm-dd)',
'LBL_NONE'                                         => 'Ninguno',
'LBL_CONTACT'                                      => 'Contacto:',
'LBL_EMAIL_ADDRESS'                                => 'Dirección de Correo:',
'LBL_PHONE'                                        => 'Teléfono:',
'LBL_EMAIL'                                        => 'Correo electrónico:',
'LBL_DESCRIPTION_INFORMATION'                      => 'Información adicional',
'LBL_DESCRIPTION'                                  => 'Descripción:',
'LBL_NAME'                                         => 'Nombre:',
'LBL_CONTACT_NAME'                                 => 'Contacto ',
'LBL_LIST_COMPLETE'                                => 'Completo:',
'LBL_LIST_STATUS'                                  => 'Estado',
'LBL_DATE_DUE_FLAG'                                => 'Sin fecha de vencimiento',
'LBL_DATE_START_FLAG'                              => 'Sin fecha de inicio',
'ERR_DELETE_RECORD'                                => 'Debe especificar un número de registro para eliminar el contacto.',
'ERR_INVALID_HOUR'                                 => 'Por favor, introduzca una hora entre 0 y 24',
'LBL_DEFAULT_PRIORITY'                             => 'Media',
'LBL_LIST_MY_TASKS'                                => 'Mis Tareas Abiertas',
'LNK_NEW_TASK'                                     => 'Nueva Tarea',
'LNK_TASK_LIST'                                    => 'Ver Tareas',
'LNK_IMPORT_TASKS'                                 => 'Importar Tareas',
'LBL_CONTACT_FIRST_NAME'                           => 'Nombre del Contacto',
'LBL_CONTACT_LAST_NAME'                            => 'Apellido del Contacto',
'LBL_LIST_ASSIGNED_TO_NAME'                        => 'Usuario Asignado',
'LBL_ASSIGNED_TO_NAME'                             => 'Asignado a:',
'LBL_LIST_DATE_MODIFIED'                           => 'Fecha de Modificación',
'LBL_CONTACT_ID'                                   => 'ID de Contacto:',
'LBL_PARENT_ID'                                    => 'ID de Padre:',
'LBL_CONTACT_PHONE'                                => 'Teléfono de Contacto:',
'LBL_PARENT_NAME'                                  => 'Tipo de Padre:',
'LBL_ACTIVITIES_REPORTS'                           => 'Informe de Actividad',
'LBL_TASK_INFORMATION'                             => 'Visión General',
'LBL_EDITLAYOUT'                                   => 'Editar diseño',
'LBL_HISTORY_SUBPANEL_TITLE'                       => 'Notas',
'LBL_DATE_DUE'                                     => 'Fecha Vencimiento:',
'LBL_EXPORT_ASSIGNED_USER_NAME'                    => 'Nombre de usuario asignado',
'LBL_EXPORT_ASSIGNED_USER_ID'                      => 'Asignado ID de usuario',
'LBL_EXPORT_MODIFIED_USER_ID'                      => 'Modificado por ID',
'LBL_EXPORT_CREATED_BY'                            => 'Creado por ID',
'LBL_EXPORT_PARENT_TYPE'                           => 'Relacionados con el módulo',
'LBL_EXPORT_PARENT_ID'                             => 'Relacionadas con la ID',
);?>
