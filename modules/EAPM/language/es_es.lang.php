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
'LBL_ASSIGNED_TO_ID'                               => 'ID Usuario Asignado',
'LBL_ASSIGNED_TO_NAME'                             => 'Usuario Sugar',
'LBL_ID'                                           => 'ID',
'LBL_DATE_ENTERED'                                 => 'Fecha de Creación',
'LBL_DATE_MODIFIED'                                => 'Fecha de Modificación',
'LBL_MODIFIED'                                     => 'Modificado por',
'LBL_MODIFIED_ID'                                  => 'Modificada por ID',
'LBL_MODIFIED_NAME'                                => 'Modificado por Nombre',
'LBL_CREATED'                                      => 'Creado por',
'LBL_CREATED_ID'                                   => 'Creado por Id',
'LBL_DESCRIPTION'                                  => 'Descripción',
'LBL_DELETED'                                      => 'Suprimir',
'LBL_NAME'                                         => 'Nombre de usuario de la aplicación',
'LBL_CREATED_USER'                                 => 'Creado Por Usuario',
'LBL_MODIFIED_USER'                                => 'Modificado Por Usuario',
'LBL_LIST_NAME'                                    => 'Nombre',
'LBL_TEAM'                                         => 'Equipos',
'LBL_TEAMS'                                        => 'Equipos',
'LBL_TEAM_ID'                                      => 'ID Equipo',
'LBL_LIST_FORM_TITLE'                              => 'Lista externa de cuentas',
'LBL_MODULE_NAME'                                  => 'Cuenta externa',
'LBL_MODULE_TITLE'                                 => 'Cuentas externas',
'LBL_HOMEPAGE_TITLE'                               => 'Mis Cuentas externas',
'LNK_NEW_RECORD'                                   => 'Crear cuenta externa',
'LNK_LIST'                                         => 'Ver cuentas externas',
'LNK_IMPORT_SUGAR_EAPM'                            => 'Importar cuentas externas',
'LBL_SEARCH_FORM_TITLE'                            => 'Buscar en una fuente externa',
'LBL_HISTORY_SUBPANEL_TITLE'                       => 'Ver el historial',
'LBL_ACTIVITIES_SUBPANEL_TITLE'                    => 'Actividades',
'LBL_SUGAR_EAPM_SUBPANEL_TITLE'                    => 'Cuentas externas',
'LBL_NEW_FORM_TITLE'                               => 'Nueva cuenta externa',
'LBL_PASSWORD'                                     => 'Contraseña de la aplicación',
'LBL_USER_NAME'                                    => 'Nombre de usuario de la aplicación',
'LBL_URL'                                          => 'URL',
'LBL_APPLICATION'                                  => 'Aplicación',
'LBL_API_DATA'                                     => 'API de datos',
'LBL_API_TYPE'                                     => 'Tipo de conexión',
'LBL_API_CONSKEY'                                  => 'Clave de consumidor',
'LBL_API_CONSSECRET'                               => 'Secreto de consumidor',
'LBL_API_OAUTHTOKEN'                               => 'OAuth Token',
'LBL_AUTH_UNSUPPORTED'                             => 'Este método de autorización no está soportada por la aplicación',
'LBL_AUTH_ERROR'                                   => 'El intento de conectarse con la cuenta ha fallado.',
'LBL_VALIDATED'                                    => 'Conectado',
'LBL_ACTIVE'                                       => 'Activo',
'LBL_OAUTH_NAME'                                   => '%s',
'LBL_SUGAR_USER_NAME'                              => 'Usuario Sugar',
'LBL_DISPLAY_PROPERTIES'                           => 'Propiedades de pantalla',
'LBL_CONNECT_BUTTON_TITLE'                         => 'Conectar',
'LBL_NOTE'                                         => 'Tenga en cuenta',
'LBL_CONNECTED'                                    => 'Conectado',
'LBL_DISCONNECTED'                                 => 'No conectado',
'LBL_ERR_NO_AUTHINFO'                              => 'No hay información de autenticación para esta cuenta.',
'LBL_ERR_NO_TOKEN'                                 => 'No hay señales de inicio de sesión válidas para esta cuenta.',
'LBL_ERR_FAILED_QUICKCHECK'                        => 'Usted no está conectado a su cuenta {0}. Haga clic en Aceptar para iniciar sesión en su cuenta y volver a activar la conexión.',
'LBL_MEET_NOW_BUTTON'                              => 'Reunirse ahora',
'LBL_VIEW_LOTUS_LIVE_MEETINGS'                     => 'Ver Próximas Reuniones de LotusLive ™',
'LBL_TITLE_LOTUS_LIVE_MEETINGS'                    => 'Próximas Reuniones de LotusLive ™',
'LBL_VIEW_LOTUS_LIVE_DOCUMENTS'                    => 'Ver Ficheros LotusLive ™',
'LBL_TITLE_LOTUS_LIVE_DOCUMENTS'                   => 'Ficheros LotusLive ™',
'LBL_REAUTHENTICATE_LABEL'                         => 'Vuelve a identificarte',
'LBL_REAUTHENTICATE_KEY'                           => 'a',
'LBL_APPLICATION_FOUND_NOTICE'                     => 'Una cuenta para esta aplicación ya existe. Hemos restablecido la cuenta existente.',
'LBL_OMIT_URL'                                     => '(Omitir http:// o https://)',
'LBL_OAUTH_SAVE_NOTICE'                            => 'Haga clic en <b> Conectar </ b> para dirigirse a una página para proporcionar información de su cuenta y para autorizar el acceso a la cuenta de Sugar. Después de la conexión, se le dirigirá de nuevo a Sugar.',
'LBL_BASIC_SAVE_NOTICE'                            => 'Haga clic en <b> Conectar </ b> para conectarse a esta cuenta de Sugar.',
'LBL_ERR_FACEBOOK'                                 => 'Facebook ha devuelto un error, y la alimentación no se puede mostrar.',
'LBL_ERR_NO_RESPONSE'                              => 'Se produjo un error al intentar conectarse a esta cuenta.',
'LBL_ERR_TWITTER'                                  => 'Twitter ha devuelto un error, y la alimentación no se puede mostrar.',
'LBL_ERR_POPUPS_DISABLED'                          => 'Por favor, activa las ventanas del navegador popup o agregar una excepción para el sitio web "{0}" a la lista de excepciones para poder conectarse.',
);?>
