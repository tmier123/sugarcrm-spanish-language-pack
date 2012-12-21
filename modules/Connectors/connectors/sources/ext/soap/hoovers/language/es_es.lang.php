<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.6 2011/02/08 20:36:21 aserrano Exp $
 * Source: SugarCRM 6.1.1
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; provee información gratuita y actualizada sobre compañías a usuarios de productos SugarCRM.  Para obtener una información más completa así como informes sobre compañías, industrias, y ejecutivos vaya a <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',    
  
    //vardef labels
	'LBL_ID' => 'ID',
	'LBL_NAME' => 'Nombre de Empresa',
	'LBL_DUNS' => 'DUNS',
	'LBL_PARENT_DUNS' => 'DUNS Padre',
	'LBL_STREET' => 'Calle',
	'LBL_ADDRESS_STREET1' => 'Calle de Dirección1',
    'LBL_ADDRESS_STREET2' => 'Calle de Dirección2',
	'LBL_CITY' => 'Ciudad',
	'LBL_STATE' => 'Estado/Provincia',
	'LBL_COUNTRY' => 'País',
	'LBL_ZIP' => 'Código Postal',
	'LBL_FINSALES' => 'Volumen de Negocio Anual',
    'LBL_HQPHONE' => 'Teléfono de Oficina',
    'LBL_TOTAL_EMPLOYEES' => 'Nº de Empleados',
	'LBL_PRIMARY_URL' => 'URL Principal',
	'LBL_DESCRIPTION' => 'Descripción',
	'LBL_SYNOPSIS' => 'Sinopsis',
	'LBL_LOCATION_TYPE' => 'Tipo de Ubicación',
	'LBL_COMPANY_TYPE' => 'Tipo de Empresa',

    //error messages
    'ERROR_NULL_CLIENT' => 'No ha sido posible crear un SoapClient para conectarse a Hoovers.  Es posible que el servicio no esté disponible o que su clave de licencia haya caducado o haya alcanzado el límite de uso diario.',
    'ERROR_MISSING_SOAP_LIBRARIES' => 'Error: No ha sido posible cargar las bibliotecas de SOAP (SoapClient, SoapHeader).',

    
	
	//Configuration labels
	'hoovers_endpoint' => 'URL del punto final',
	'hoovers_wsdl' => 'URL WSDL',
	'hoovers_api_key' => 'Clave API',
);

?>
