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
 * The Original Code is: SugarCRM Enterprise
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.3 2010/08/03 19:40:45 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Mostrar Usuarios Activos',
		  'ShowLastModifiedRecords' => 'Últimos 10 Registros Modificados',
		  'ShowTopUser' => 'Usuario Más Activo',
		  'ShowMyModuleUsage' => 'Mi Uso de Módulos',
		  'ShowMyWeeklyActivities' => 'Mi Actividad Semanal',
		  'ShowTop3ModulesUsed' => 'Mis 3 Módulos Más Usados',
		  'ShowLoggedInUserCount' => 'Número de Usuarios Activos',
		  'ShowMyCumulativeLoggedInTime' => 'Mi Tiempo de Sesión Acumulado (Esta Semana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tiempo de Sesión Acumulado de Todos los Usuarios (Esta Semana)',

		  //Column header mapping
		  'action' => 'Acción',
		  'active_users' => 'Número de Usuarios Activos',
		  'date_modified' => 'Fecha de Última Acción',
		  'different_modules_accessed' => 'Número de Módulos Accedidos',
		  'first_name' => 'Nombre',
		  'item_id' => 'ID',
		  'item_summary' => 'Nombre',
		  'last_action' => 'Fecha/Hora de Última Acción',
		  'last_name' => 'Apellido',
		  'module_name' => 'Nombre de Módulo',
		  'records_modified' => 'Total de Registros Modificados',
		  'top_module' => 'Módulos Más Accedidos',
		  'total_count' => 'Total de Visitas a Páginas',
		  'total_login_time' => 'Hora (hh:mm:ss)',
		  'user_name' => 'Nombre de usuario',
		  'users' => 'Usuarios',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Habilitado',
		  'LBL_MODULE_NAME_TITLE' => 'Monitorizaciones',
		  'LBL_MODULE_NAME' => 'Monitorizaciones',
		  'LBL_TRACKER_SETTINGS' => 'Configuración de Monitorización',
		  'LBL_TRACKER_QUERIES_DESC' => 'Consultas de Monitorización',
		  'LBL_TRACKER_QUERIES_HELP' => 'Monitorizar sentencias SQL cuando "Registrar consultas lentas" esté habilitado y el tiempo de ejecución de la consulta exceda el valor del "Tiempo umbral para consultas lentas"',
		  'LBL_TRACKER_PERF_DESC' => 'Rendimiento de Monitorización',
		  'LBL_TRACKER_PERF_HELP' => 'Monitorizar accesos a base de datos, archivos accedidos y utilización de memoria',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sesiones de Monitorización',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Monitorizar usuarios activos e información de la sesión de los usuarios',
		  'LBL_TRACKER_DESC' => 'Acciones de Monitorización',
		  'LBL_TRACKER_HELP' => 'Monitorizar visitas de los usuarios a páginas (módulos y registros accedidos) y registros guardados',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Número de días de datos de Monitorización a guardar cuando el Planificador compacte las tablas',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Número de días',
);
?>
