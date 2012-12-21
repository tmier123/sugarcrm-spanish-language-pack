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
 * $Id: es_es.lang.php,v 1.10 2010/08/03 16:27:37 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Productos',
  'LBL_MODULE_TITLE' => 'Productos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Productos',
  'LBL_LIST_FORM_TITLE' => 'Lista de Productos',
  'LBL_NEW_FORM_TITLE' => 'Crear Producto',
  'LBL_PRODUCT' => 'Producto:',
  'LBL_RELATED_PRODUCTS' => 'Productos Relacionados',
  'LBL_LIST_NAME' => 'Producto',
  'LBL_LIST_MANUFACTURER' => 'Proveedor',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Nº Pieza',
  'LBL_LIST_QUANTITY' => 'Cantidad',
  'LBL_LIST_COST_PRICE' => 'Coste',
  'LBL_LIST_DISCOUNT_PRICE' => 'Precio',
  'LBL_DEAL_TOT' => 'Descuento:',
  'LBL_DISCOUNT_RATE' => 'Tarifa de Descuento',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Tarifa de Descuento (Dólares EEUU)',
  'LBL_DISCOUNT_TOTAL' => 'Descuento',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Descuento (Dólares EEUU)',
  'LBL_SELECT_DISCOUNT' => '% de Descuento',
  'LBL_LIST_LIST_PRICE' => 'Precio de Lista',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_CONTACT_NAME' => 'Nombre de Contacto',
  'LBL_LIST_QUOTE_NAME' => 'Nombre de Presupuesto',
  'LBL_LIST_DATE_PURCHASED' => 'Comprado',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Caduca',
  'LBL_NAME' => 'Producto:',
  'LBL_URL' => 'URL Producto:',
  'LBL_QUOTE_NAME' => 'Nombre de Presupuesto:',
  'LBL_CONTACT_NAME' => 'Nombre de Contacto:',
  'LBL_DATE_PURCHASED' => 'Comprado:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Caducidad del Soporte:',
  'LBL_DATE_SUPPORT_STARTS' => 'Inicio del Soporte:',
  'LBL_COST_PRICE' => 'Coste:',
  'LBL_DISCOUNT_PRICE' => 'Precio Unitario:',
  'LBL_LIST_PRICE' => 'Precio de Lista:',
  'LBL_VENDOR_PART_NUM' => 'Número de Parte del Vendedor:',
  'LBL_MFT_PART_NUM' => 'Número de Parte del Fabricante:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Fecha de Precio con Descuento:',
  'LBL_WEIGHT' => 'Peso:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CATEGORY' => 'Categoría:',
  'LBL_QUANTITY' => 'Cantidad:',
  'LBL_STATUS' => 'Estado:',
  'LBL_TAX_CLASS' => 'Tipo de Impuesto:',
  'LBL_MANUFACTURER' => 'Fabricante:',
  'LBL_SUPPORT_DESCRIPTION' => 'Desc. del Soporte:',
  'LBL_SUPPORT_TERM' => 'Término del Soporte:',
  'LBL_SUPPORT_NAME' => 'Título del Soporte:',
  'LBL_SUPPORT_CONTACT' => 'Contacto del Soporte:',
  'LBL_PRICING_FORMULA' => 'Fórmula de Valoración:',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LNK_PRODUCT_LIST' => 'Ver Productos',
  'LNK_NEW_PRODUCT' => 'Crear Producto',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de que desea quitar esta relación entre productos?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_ASSET_NUMBER' => 'Múmero de Activo:',
  'LBL_SERIAL_NUMBER' => 'Número de Serie:',
  'LBL_BOOK_VALUE' => 'Valor Contable:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Valor Contable (Dólares EEUU):',
  'LBL_BOOK_VALUE_DATE' => 'Fecha del Valor Contable:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Productos',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Productos Relacionados',
  'LBL_WEBSITE' => 'Sitio web',
  'LBL_COST_USDOLLAR' => 'Coste (Dólares EEUU)',
  'LBL_DISCOUNT_USDOLLAR' => 'Precio Unitario (Dólares EEUU)',
  'LBL_LIST_USDOLLAR' => 'Precio de Lista (Dólares EEUU)',
  'LBL_PRICING_FACTOR' => 'Factor de Valoración',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_CONTACT_ID' => 'ID Contacto',
  'LBL_CATEGORY_NAME'=>'Nombre de Categoría:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',
  'LBL_MEMBER_OF' => 'Miembro de:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',

  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
  'LBL_CONTRACTS' => 'Contratos',  

  'LBL_PRODUCT_CATEGORIES' => 'Categorías de Productos',
  'LBL_PRODUCT_TYPES' => 'Tipos de Productos',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
  'LBL_PRODUCT_TEMPLATE_ID'=>'ID de Plantilla de Producto:',
  'LBL_QUOTE_ID'=>'ID de Presupuesto',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_QUOTE' => 'Presupuesto',
  'LBL_CONTACT' => 'Contacto',
  'LBL_DISCOUNT_TOTAL' => 'Descuento Total',   
  'LBL_DISCOUNT_AMOUNT' => 'Cantidad Descontada',   
  'LBL_CURRENCY_SYMBOL_NAME' => 'Nombre del Símbolo de Moneda',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
  'LNK_IMPORT_PRODUCTS' => 'Importar Productos',
);


?>