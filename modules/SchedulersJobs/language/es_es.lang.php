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
'LBL_NAME'                                         => 'Nombre de Tarea',
'LBL_EXECUTE_TIME'                                 => 'Hora de Ejecución',
'LBL_SCHEDULER_ID'                                 => 'Programador',
'LBL_STATUS'                                       => 'Estado de la Tarea',
'LBL_RESOLUTION'                                   => 'Resultado',
'LBL_MESSAGE'                                      => 'Mensajes',
'LBL_DATA'                                         => 'Fecha de la Tarea',
'LBL_REQUEUE'                                      => 'Volver a intentar en caso de fallo',
'LBL_RETRY_COUNT'                                  => 'Intentos máximos',
'LBL_FAIL_COUNT'                                   => 'Fracasos',
'LBL_INTERVAL'                                     => 'Intervalo mínimo entre intentos',
'LBL_CLIENT'                                       => 'Cliente propietario',
'LBL_PERCENT'                                      => '% Completado',
'ERR_CALL'                                         => 'No se puede llamar a la función: %s',
'ERR_CURL'                                         => 'No CURL - no se puede ejecutar la URL de la Tarea',
'ERR_FAILED'                                       => 'Error inesperado, por favor consulte los registros de PHP y sugarcrm.log',
'ERR_PHP'                                          => '%s [%d]: %s en %s en la línea %d',
'ERR_NOUSER'                                       => 'Ningún ID de usuario especificado en la Tarea',
'ERR_NOSUCHUSER'                                   => 'ID de Usuario %s no encontrado',
'ERR_JOBTYPE'                                      => 'Tipo de tarea desconocido: %s',
'ERR_TIMEOUT'                                      => 'Fracaso forzado por tiempo de espera agotado',
'ERR_JOB_FAILED_VERBOSE'                           => 'Tarea %1$s (%2$s) falla en ejecutar el cron',
);?>
