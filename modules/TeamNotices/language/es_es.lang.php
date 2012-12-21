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
 * *******************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.5 2010/03/10 21:39:49 aserrano Exp $
 * Source: SugarCRM 5.1.0a
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Noticias de Equipo',
  'LBL_MODULE_TITLE' => 'Noticias de Equipo: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Noticias de Equipo',
  'LBL_LIST_FORM_TITLE' => 'Lista de Noticias de Equipo',
  'LBL_PRODUCTTYPE' => 'Noticia de Equipo',
  'LBL_NOTICES' => 'Noticias de Equipo',
  'LBL_LIST_NAME' => 'Título',
  'LBL_URL' => 'URL',
  'LBL_URL_TITLE' => 'Título de URL',
  'LBL_LIST_DESCRIPTION' => 'Descripción',
  'LBL_NAME' => 'Título',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_LIST_LIST_ORDER' => 'Orden',
  'LBL_LIST_ORDER' => 'Orden',
  'LBL_DATE_START' => 'Fecha de Inicio',
  'LBL_DATE_END' => 'Fecha de Fin',
  'LBL_STATUS' => 'Estado',
  'LNK_NEW_TEAM' => 'Nuevo Equipo',
  'LNK_NEW_TEAM_NOTICE' => 'Nueva Noticia de Equipo',
  'LNK_LIST_TEAM' => 'Equipos',
  'LNK_LIST_TEAMNOTICE' => 'Noticias de Equipo',
  'LNK_PRODUCT_LIST' => 'Productos con Precio de Lista',
  'LNK_NEW_PRODUCT' => 'Nuevo Producto',
  'LNK_NEW_MANUFACTURER' => 'Proveedores',
  'LNK_NEW_SHIPPER' => 'Proveedores de Transporte',
  'LNK_NEW_PRODUCT_CATEGORY' => 'Categorías de Producto',
  'LNK_NEW_PRODUCT_TYPE' => 'Lista de Tipos de Producto',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el tipo de producto.',
  'NTC_LIST_ORDER' => 'Establece el orden en que este tipo aparecerá en las listas desplegables de Tipo de Producto',
  'dom_status' => 
  array (
    'Visible' => 'Visible',
    'Hidden' => 'Oculto',
  ),
  'LBL_TEAM_NOTICE_FEATURES' => 'Características:
* Interfaz de Usuario Mejorado y un nuevo Asistente que combinan un diseño simple e intuitivo con un proceso paso a paso para guiar al usuario a través de la creación de informes.
* Los Conjuntos de Informes Complejos permiten a los usuarios crear informes a través de múltiples módulos utilizando lógica compleja.
* Los Informes Matriciales le ofrecen la habilidad de realizar agrupaciones por múltiples atributos en un diseño flexible de cuadrícula. Los usuarios pueden crear complejas tablas dinámicas con la capacidad de mostrar operaciones como la Suma, Media, Cuenta y Porcentaje.
* Los Filtros en Tiempo de Ejecución permiten que un usuario cambie los atributos de un informe en tiempo real.',
  'LBL_TEAM_NOTICE_WIRELESS' => 'La nueva vista móvil de la aplicación SugarCRM rompe con la noción clásica del sacrificio de la usabilidad en favor de la movilidad.
Características:
* El Interfaz de Usuario Mejorado proporciona al usuario las vistas de edición, detalle, lista y registros relacionados,así como la habilidad de acceder al directorio de empleados, guardar preferencias, y ver los elementos recientes.
* La Independencia de Dispositivo permite que los usuarios vean los datos de SugarCRM desde cualquier PDA o smartphone, incluyendo Blackberry e iPhone.
* El Cliente de HTML Enriquecido aporta una presentación clara de los datos de SugarCRM a través de un navegador web estándar.
* Las Nuevas Capacidades de Búsqueda permiten a los usuarios encontrar la información rápidamente.',
  'LBL_TEAM_NOTICE_DATA_IMPORT' => 'Las Mejoras a la Importación de Datos hacen aún más fácil la migración de datos a SugarCRM desde aplicaciones como Excel, Act!, Microsoft Outlook, y Salesforce.com.
Mejoras:
* El Interfaz de Usuario Mejorado del mapeo proporciona más opciones para garantizar que las transferencias de datos a SugarCRM se ejecutan con precisión y sin problemas.
* Los Controles de Calidad de Datos permiten que los administradores especifiquen si las importaciones de datos deberían crear nuevos registros o actualizar los existentes, reduciendo así la información duplicada.
* La Importación en Todos los Módulos proporciona la habilidad de llevar la información de otras aplicaciones CRM a cualquier módulo, reduciendo la repetición de la introducción de datos.',
  'LBL_TEAM_NOTICE_MODULE_BUILDER' => 'El Constructor de Módulos le permite extender SugarCRM de formas nuevas e innovadoras.
Mejoras:
* Las Nuevas Relaciones permiten que tanto los módulos nuevos como los existentes sean relacionados de nuevas maneras.
* La Auditoría proporciona un historial completo de la creación y modificación de módulos para poder hacer un seguimiento de las personalizaciones.
* El Soporte de Dashlets permite que la funcionalidad de módulos y objetos personalizados sea mostrada en contenedores AJAX ubicados en la página de inicio.
* Las Nuevas Plantillas proporcionan un modo de monitorizar fácilmente la información de archivos y oportunidades.',
  'LBL_TEAM_NOTICE_TRACKER' => 'La Monitorización proporcionan una vista detallada del uso y rendimiento de SugarCRM.
Características:
* Los Informes de Monitorización proporcionan una instantánea de la utilización del sistema para mejorar la adopción por parte de los usuarios y la visibilidad sobre la utilización del CRM. Los Usuarios pueden ver informes sobre actividades semanales en el CRM, registros y módulos vistos, tiempo de sesión acumulado y estado en línea de otros miembros de equipo.
* La Monitorización del Sistema proporciona a los administradores información sobre cómo el sistema está siendo utilizado y sobre potenciales puntos de sobrecarga en la aplicación.',
  );


?>