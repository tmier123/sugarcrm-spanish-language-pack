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
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.7 2010/09/27 19:20:54 aserrano Exp $
 * Source: SugarCRM 6.0.2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Lista de Destinatarios de Alertas',
  'LBL_MODULE_TITLE' => 'Destinatarios: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Destinatarios de Workflow',
  'LBL_LIST_FORM_TITLE' => 'Lista de Destinatarios',
  'LBL_NEW_FORM_TITLE' => 'Crear Destinatario de Workflow',
  'LBL_LIST_USER_TYPE' => 'Tipo de Usuario',
  'LBL_LIST_ARRAY_TYPE' => 'Tipo de Acción',
  'LBL_LIST_RELATE_TYPE' => 'Tipo Relacionado',
  'LBL_LIST_ADDRESS_TYPE' => 'Tipo de Dirección',
  'LBL_LIST_FIELD_VALUE' => 'Usuario',
  'LBL_LIST_REL_MODULE1' => 'Módulo Relacionado',
  'LBL_LIST_REL_MODULE2' => 'Módulo Relacionado con el Relacionado',
  'LBL_LIST_WHERE_FILTER' => 'Estado',
  'LBL_USER_TYPE' => 'Tipo de Usuario:',
  'LBL_ARRAY_TYPE' => 'Tipo de Acción:',
  'LBL_RELATE_TYPE' => 'Tipo de Relación:',
  'LBL_ADDRESS_TYPE' => 'utilizando la dirección ',
  'LBL_WHERE_FILTER' => 'Estado:',
  'LBL_FIELD_VALUE' => 'Usuario Seleccionado:',
  'LBL_REL_MODULE1' => 'Módulo Relacionado:',
  'LBL_REL_MODULE2' => 'Módulo Relacionado con el Relacionado:',
  'LBL_CUSTOM_USER' => 'Usuario Personalizado:',
  'LNK_NEW_WORKFLOW' => 'Crear Workflow',
  'LNK_WORKFLOW' => 'Objetos del Workflow',
  'LBL_LIST_STATEMENT' => 'Destinatarios de la Alerta:',
  'LBL_LIST_STATEMENT_CONTENT' => 'Enviar la alerta al siguiente destinatario: ',
  'LBL_ALERT_CURRENT_USER' => 'Un usuario asociado al objetivo ',
  'LBL_ALERT_CURRENT_USER_TITLE' => 'Un usuario asociado con el módulo objetivo',
  'LBL_ALERT_REL_USER' => 'Un usuario asociado con el relacionado ', // HACER: Orden no aplicable en Español
  'LBL_ALERT_REL_USER_TITLE' => 'Un usuario asociado con un módulo relacionado',
  'LBL_ALERT_REL_USER_CUSTOM' => 'El destinatario asociado con un relacionado ',
  'LBL_ALERT_REL_USER_CUSTOM_TITLE' => 'El destinatario asociado con un módulo relacionado',
  'LBL_ALERT_TRIG_USER_CUSTOM' => 'El destinatario asociado con el módulo objetivo ',
  'LBL_ALERT_TRIG_USER_CUSTOM_TITLE' => 'El destinatario asociado con el módulo objetivo',
  'LBL_ALERT_SPECIFIC_USER' => 'Un especificado ',
  'LBL_ALERT_SPECIFIC_USER_TITLE' => 'Un usuario especificado',
  'LBL_ALERT_SPECIFIC_TEAM' => 'Todos los usuarios en un especificado ',
  /////////New UI Labels
  'LBL_ALERT_SPECIFIC_TEAM_TITLE' => 'Todos los usuarios en un equipo especificado',
  'LBL_ALERT_SPECIFIC_ROLE' => 'Todos los usuarios en un especificado ',
  'LBL_ALERT_SPECIFIC_ROLE_TITLE' => 'Todos los usuarios en un especificado rol',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET_TITLE' => 'Miembros del equipo asociados con el módulo objetivo',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET' => 'Todos los usuarios que pertenecen a los equipos asociados con el módulo objetivo',
  'LBL_ALERT_LOGIN_USER_TITLE' => 'Usuario con la sesión iniciada en el momento de ejecución',
  'LBL_RECORD' => 'Módulo',
  'LBL_TEAM' => 'Equipo',
  'LBL_USER' => 'Usuario',
  'LBL_USER_MANAGER' => 'responsable del usuario',
  'LBL_ROLE' => 'rol',
  'LBL_SEND_EMAIL' => 'Enviar un correo a: ',
  'LBL_USER1' => ' que creó el registro',
  'LBL_USER2' => ' que modificó por última vez el registro',
  'LBL_USER3' => 'Actual ',
  'LBL_USER3b' => ' del sistema.',
  'LBL_USER4' => ' que tiene el registro asignado',
  'LBL_USER5' => ' a quien fue asignado el registro',
  'LBL_ADDRESS_TO' => 'Para:',
  'LBL_ADDRESS_CC' => 'CC:',
  'LBL_ADDRESS_BCC' => 'CCO:',
  'LBL_ADDRESS_TYPE_TARGET' => 'tipo',
  'LBL_ALERT_REL1' => 'Módulo Relacionado: ',
  'LBL_ALERT_REL2' => 'Módulo Relacionado con el Relacionado: ',
  'LBL_NEXT_BUTTON' => 'Siguiente',
  'LBL_PREVIOUS_BUTTON' => 'Anterior',
  'LBL_BLANK' => '',
  'NTC_REMOVE_ALERT_USER' => '¿Está seguro de que desea quitar este destinatario de la alerta?',
  'LBL_REL_CUSTOM_STRING' => 'Seleccione campos personalizados de email y nombre',
  'LBL_REL_CUSTOM' => 'Seleccione campo personalizado de Email: ',
  'LBL_REL_CUSTOM2' => 'Campo ',
  'LBL_AND' => 'y Campo para el Nombre:',
  'LBL_REL_CUSTOM3' => 'Campo',
  'LBL_FILTER_CUSTOM' => '(Filtro Adicional) Filtrar módulo relacionado por específico ',
  'LBL_FIELD' => 'Campo',
  'LBL_SPECIFIC_FIELD' => 'campo',
  'LBL_FILTER_BY' => '(Filtro Adicional) Filtrar módulo relacionado por ',
  'LBL_MODULE_NAME_INVITE' => 'Lista de Invitados',
  'LBL_LIST_STATEMENT_INVITE' => 'Invitados a Reunión/Llamada:',
  'LBL_SELECT_VALUE' => 'Debe seleccionar un valor válido.',
  'LBL_SELECT_NAME' => 'Debe seleccionar un campo personalizado para el nombre',
  'LBL_SELECT_EMAIL' => 'Debe seleccionar un campo personalizado para el e-mail',
  'LBL_SELECT_FILTER' => 'Debe seleccionar un campo para filtrar por su valor',
  'LBL_SELECT_NAME_EMAIL' => 'Debe seleccionar los campos de nombre y de e-mail',
  'LBL_PLEASE_SELECT' => 'Por favor, realice la selección',
);


?>