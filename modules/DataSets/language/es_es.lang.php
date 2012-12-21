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
 * $Id: es_es.lang.php,v 1.5 2010/08/03 12:05:42 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Formato de Datos',
  'LBL_MODULE_TITLE' => 'Formatos de Datos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Formatos de Datos',
  'LBL_LIST_FORM_TITLE' => 'Lista de Formatos de Datos',
  'LBL_LIST_NAME' => 'Nombre del Formato de Datos',
  'LBL_LIST_QUERY_NAME' => 'Nombre de Consulta',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Salida por Defecto',
  'LBL_LIST_LIST_ORDER_Y' => 'Orden Y',
  'LBL_LIST_LIST_ORDER_X' => 'Orden X',
  'LBL_LIST_VISIBLE' => '¿Visible?',
  'LBL_LIST_EXPORTABLE' => '¿Exportable?',
  'LBL_LIST_HEADER' => '¿Mostrar Cabecera?',
  'LBL_NAME' => 'Nombre del Formato de Datos:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_PARENT_DATASET' => 'Formato de Datos Padre:',
  'LBL_QUERY_NAME' => 'Nombre de Consulta:',
  'LBL_OUTPUT_DEFAULT' => 'Tipo de Salida por Defecto:',
  'LBL_LIST_ORDER_Y' => 'Orden en Eje Y:',
  'LBL_LIST_ORDER_X' => 'Orden en Eje X:',
  'LBL_HEADER' => 'Mostrar Cabecera:',
  'LBL_EXPORTABLE' => 'Exportable (Sólo Archivo CSV):',
  'LBL_VISIBLE' => 'Formato de Datos Visible:',
  'LBL_TABLE_WIDTH' => 'Anchura de la Tabla %:',
  'LBL_FONT_SIZE' => 'Tamaño de la Fuente:',
  'LBL_REPORT_NAME' => 'Nombre de Informe:',
  'LBL_PRESPACE_X' => 'Margen lateral:',
  'LBL_PRESPACE_Y' => 'Combinar con el Formato de Datos previo:',
  'LBL_TABLE_WIDTH_TYPE' => 'Tipo de Ancho de Tabla:',
  'LBL_BODY_TEXT_COLOR' => 'Color de Texto del Cuerpo:',
  'LBL_HEADER_TEXT_COLOR' => 'Color de Texto de la Cabecera:',
  'LBL_HEADER_BACK_COLOR' => 'Color de Fondo de la Cabecera:',
  'LBL_BODY_BACK_COLOR' => 'Color de Fondo del Cuerpo:',
  'LBL_USE_PREV_HEADER' => 'Agrupar con Cabecera previa:',
  'LBL_CHILD_NAME' => 'Subconsulta/Consulta hija:',
  'LBL_CUSTOM_LAYOUT' => 'Diseño Personalizado:',
  'LNK_LIST_REPORTMAKER' => 'Lista de Informes Empresariales',
  'LNK_NEW_REPORTMAKER' => 'Crear Informe',
  'LNK_LIST_DATASET' => 'Lista de Formatos de Datos',
  'LNK_NEW_DATASET' => 'Crear Formato de Datos',
  'LNK_NEW_CUSTOMQUERY' => 'Crear Consulta Personalizada',
  'LNK_CUSTOMQUERIES' => 'Consultas Personalizadas',
  'LNK_NEW_QUERYBUILDER' => 'Crear Consulta',
  'LNK_QUERYBUILDER' => 'Diseñador de Consultas',
  'LBL_ALL_REPORTS' => 'Todos los Informes',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_LAYOUT_TYPE' => 'Tipo de Diseño:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Valor por Defecto:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Orden de Lista en Eje X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Orden de Lista en Eje Z:',
  'LBL_MODIFY_HEAD' => 'Modificar Atributos de la Cabecera:',
  'LBL_MODIFY_BODY' => 'Modificar Atributos del Cuerpo:',
  'LBL_BG_COLOR' => 'Color de Fondo:',
  'LBL_WRAP' => 'Ajustar Texto:',
  'LBL_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_STYLE' => 'Estilo de Fuente:',
  'LBL_DISPLAY_NAME' => 'Nombre de Visualización:',
  'LBL_FORMAT_TYPE' => 'Tipo de Formato:',
  'LBL_FORMAT' => 'Formato:',
  'LBL_CELL_SIZE' => 'Anchura de Celda:',
  'LBL_HIDE_COLUMN' => 'Ocultar Columna en Informe:',
  'LBL_FINISHED_BUTTON' => 'Terminado',
  'CONFIRM_LAYOUT_DISABLE' => 'Al deshabilitar el diseño por defecto se perderán todas las propiedades actuales del diseño personalizado',
  'LBL_LEFT' => 'Izquierda',
  'LBL_RIGHT' => 'Derecha',
);


?>
