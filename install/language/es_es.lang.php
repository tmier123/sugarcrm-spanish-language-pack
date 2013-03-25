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
'LBL_BASIC_SEARCH'                                 => 'Búsqueda básica',
'LBL_ADVANCED_SEARCH'                              => 'Búsqueda Avanzada',
'LBL_BASIC_TYPE'                                   => 'Tipo básico',
'LBL_ADVANCED_TYPE'                                => 'Tipo avanzado',
'LBL_SYSOPTS_1'                                    => 'Seleccione una de las siguientes opciones de configuración del sistema a continuación.',
'LBL_SYSOPTS_2'                                    => '¿Qué tipo de base de datos se utilizará para la instancia de azúcar que va a instalar?',
'LBL_SYSOPTS_CONFIG'                               => 'Configuración del sistema',
'LBL_SYSOPTS_DB_TYPE'                              => ' ',
'LBL_SYSOPTS_DB'                                   => 'Especificar el tipo de base de datos',
'LBL_SYSOPTS_DB_TITLE'                             => 'Tipo de base de datos',
'LBL_SYSOPTS_ERRS_TITLE'                           => 'Por favor, corrija los errores siguientes antes de continuar:',
'LBL_MAKE_DIRECTORY_WRITABLE'                      => 'Por favor, habilite la escritura del siguiente directorio :',
'ERR_DB_VERSION_FAILURE'                           => 'No se puede comprobar la versión de base de datos.',
'DEFAULT_CHARSET'                                  => 'UTF-8',
'ERR_ADMIN_USER_NAME_BLANK'                        => 'Proporcione el nombre de usuario para el usuario administrador de Sugar.',
'ERR_ADMIN_PASS_BLANK'                             => 'Proporcione la contraseña para el usuario admin de Sugar.',
'ERR_CHECKSYS'                                     => 'Se han detectado errores durante la prueba de compatibilidad. Para que su instalación de SugarCRM para funcionar correctamente, por favor, tomar las medidas adecuadas para hacer frente a las cuestiones que se enumeran a continuación y pulse el botón vuelva a revisar, o tratar de instalar de nuevo.',
'ERR_CHECKSYS_CALL_TIME'                           => 'Permitir llamadas Time Reference Pass está ON (esto debe ponerse en Off en php.ini)',
'ERR_CHECKSYS_CURL'                                => 'No se ha encontrado: Sugar Scheduler se ejecutará con funcionalidad limitada.',
'ERR_CHECKSYS_FASTCGI_LOGGING'                     => 'Para una experiencia óptima utilizando IIS / FastCGI SAPI, creado fastcgi.logging a 0 en el archivo php.ini.',
'ERR_CHECKSYS_IMAP'                                => 'No encontrado: InboundEmail y Campañas (Correo electrónico) requiere las bibliotecas IMAP. Tampoco será funcional.',
'ERR_CHECKSYS_MSSQL_MQGPC'                         => 'Magic Quotes GPC no se puede activar "On" cuando se utiliza MS SQL Server.',
'ERR_CHECKSYS_MEM_LIMIT_0'                         => 'Advertencia:',
'ERR_CHECKSYS_MEM_LIMIT_1'                         => '(Ponga esto a',
'ERR_CHECKSYS_MEM_LIMIT_2'                         => 'M o mayor en su archivo php.ini)',
'ERR_CHECKSYS_MYSQL_VERSION'                       => 'Versión mínima 4.1.2 - Encontrado:',
'ERR_CHECKSYS_NO_SESSIONS'                         => 'Error al escribir y leer variables de sesión. No se puede continuar con la instalación.',
'ERR_CHECKSYS_NOT_VALID_DIR'                       => 'No es un directorio válido',
'ERR_CHECKSYS_NOT_WRITABLE'                        => 'Advertencia: No se puede escribir',
'ERR_CHECKSYS_PHP_INVALID_VER'                     => 'Su versión de PHP no es compatible con Sugar. Usted tendrá que instalar una versión que sea compatible con la aplicación de Sugar. Por favor, consulte la Matriz de compatibilidad en las notas de la versión para las versiones de PHP compatibles. Su versión es',
'ERR_CHECKSYS_IIS_INVALID_VER'                     => 'Su versión de IIS no es compatible con Sugar. Usted tendrá que instalar una versión que sea compatible con la aplicación de Azúcar. Por favor, consulte la Matriz de compatibilidad en las notas de la versión para las versiones compatibles de IIS. Su versión es',
'ERR_CHECKSYS_FASTCGI'                             => 'Detectamos que no está utilizando una asignación de controlador para PHP FastCGI. Usted tendrá que instalar / configurar una versión que sea compatible con la aplicación de Azúcar. Por favor, consulte la Matriz de compatibilidad en las notas de la versión para las versiones soportadas. Por favor, consulte <a href="http://www.iis.net/php/" http://www.iis.net/php/ target="_blank"> </ a> para obtener más información',
'ERR_CHECKSYS_PHP_UNSUPPORTED'                     => 'Versión PHP instalada no es compatible: (ver',
'LBL_DB_UNAVAILABLE'                               => 'Base de datos inasequible',
'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE'            => 'No se encontró soporte para la base de datos. Por favor, asegúrese de que tiene los controladores necesarios para uno de los tipos de bases de datos soportados siguientes: MySQL o MS SQL Server. Puede que tenga que descomentar la extensión en el archivo php.ini o recompile con el archivo binario correcto, dependiendo de la versión de PHP. Por favor, consulte el Manual de PHP para obtener más información sobre cómo activar el soporte de base de datos.',
'LBL_CHECKSYS_XML_NOT_AVAILABLE'                   => 'Funciones asociadas con XML Parser Libraries que son necesarios para la aplicación del Sugar no fueron encontrados. Puede que tenga que descomentar la extensión en el archivo php.ini o recompile con el archivo binario correcto, dependiendo de la versión de PHP. Por favor, consulte el Manual de PHP para más información.',
'ERR_CHECKSYS_MBSTRING'                            => 'Funciones relacionadas con la extensión Multibyte Strings PHP (mbstring) que son necesarios para la aplicación del Sugar no fueron encontrados. <br/> En general, el módulo mbstring no está activado por defecto en PHP y debe ser activada con la opción - enable-mbstring cuando el binario de PHP se construye. Por favor, consulte el Manual de PHP para obtener más información sobre cómo habilitar la compatibilidad mbstring.',
'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'           => 'El ajuste session.save_path en el archivo de configuración de PHP (php.ini) no se establece o se establece en una carpeta que no existe. Es posible que necesite ajustar la configuración de save_path en php.ini o verificar que los conjuntos de carpeta en save_path existe.',
'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'      => 'El ajuste session.save_path en el archivo de configuración de PHP (php.ini) se establece en una carpeta que no se puede escribir. Por favor, tome las medidas necesarias para que la carpeta escribible. <br> Dependiendo de su sistema operativo, lo que podría requerir que usted cambie los permisos ejecutando chmod 766, o hacer clic derecho sobre el nombre del archivo para acceder a las propiedades y desactive la opción de sólo lectura.',
'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'                 => 'El archivo de configuración existe, pero no se puede escribir. Por favor, tome las medidas necesarias para que el archivo se pueda escribir. Dependiendo de su sistema operativo, lo que podría requerir que usted cambie los permisos ejecutando chmod 766, o hacer clic derecho sobre el nombre del archivo para acceder a las propiedades y desactive la opción de sólo lectura.',
'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'        => 'El archivo de sustitución de configuración existe, pero no se puede escribir. Por favor, tome las medidas necesarias para que el archivo se pueda escribir. Dependiendo de su sistema operativo, lo que podría requerir que usted cambie los permisos ejecutando chmod 766, o hacer clic derecho sobre el nombre del archivo para acceder a las propiedades y desactive la opción de sólo lectura.',
'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'                 => 'El Directorio personal existe pero no se puede escribir. Puede que tenga que cambiar los permisos en él (chmod 766) o clic derecho sobre él y desmarque la opción de sólo lectura, dependiendo de su sistema operativo. Por favor, tome las medidas necesarias para que el archivo se pueda escribir.',
'ERR_CHECKSYS_FILES_NOT_WRITABLE'                  => 'Los archivos o directorios que figuran a continuación no tienen permisos de escritura o se pierden y no se puede crear. Dependiendo de su sistema operativo, para corregir esto puede requerir que usted cambie los permisos de los archivos o directorios padre (chmod 755), o hacer clic derecho sobre el directorio padre y desactive la casilla "sólo lectura" opción y aplicarlo a todas las subcarpetas.',
'ERR_CHECKSYS_SAFE_MODE'                           => 'Modo seguro está activado (se puede deshabilitar en php.ini)',
'ERR_CHECKSYS_ZLIB'                                => 'ZLib support not found: SugarCRM reaps enormous performance benefits with zlib compression.',
'ERR_CHECKSYS_ZIP'                                 => 'Apoyo ZLib not found: SugarCRM cosecha enormes beneficios de rendimiento con compresión zlib.',
'ERR_DB_ADMIN'                                     => 'El nombre de usuario de base de datos ha proporcionado el administrador y / o la contraseña no es válida, y una conexión a la base de datos no pudo ser establecida. Por favor, introduzca un nombre de usuario válido y la contraseña. (Error:',
'ERR_DB_ADMIN_MSSQL'                               => 'El nombre de usuario de base de datos ha proporcionado el administrador y / o la contraseña no es válida, y una conexión a la base de datos no pudo ser establecida. Por favor, introduzca un nombre de usuario válido y la contraseña.',
'ERR_DB_EXISTS_NOT'                                => 'La base de datos especificado no existe.',
'ERR_DB_EXISTS_WITH_CONFIG'                        => 'Base de datos ya existe con los datos de configuración. Para ejecutar una instalación con la base de datos elegida, vuelva a ejecutar la instalación y elegir: "Quite y vuelva a crear las tablas existentes SugarCRM?" Para actualizar, utilice el Asistente para actualización en la consola de administración. Por favor, lea la documentación de actualización situado <a href="http://www.sugarforge.org/content/downloads/" target="_new"> aquí </ a>.',
'ERR_DB_EXISTS'                                    => 'El nombre de la base de datos ya existe - no puede crear otra con el mismo nombre.',
'ERR_DB_EXISTS_PROCEED'                            => 'El nombre de la base de datos ya existe. Puede <br> 1. pulsa el botón de nuevo y elegir un nombre de base de datos nueva <br> 2. haga clic en siguiente y continuar, pero todas las tablas existentes en esta base de datos quitar. <strong> Esto significa que sus tablas y los datos serán arrastrados. </ strong>',
'ERR_DB_HOSTNAME'                                  => 'El nombre de host no puede estar en blanco.',
'ERR_DB_INVALID'                                   => 'Tipo de base de datos seleccionado no válido.',
'ERR_DB_LOGIN_FAILURE'                             => 'El host de base de datos proporcionada, nombre de usuario y / o contraseña no es válida, y una conexión a la base de datos no pudo ser establecida. Por favor, introduzca un host válido nombre de usuario y contraseña. ',
'ERR_DB_LOGIN_FAILURE_MYSQL'                       => 'El host de base de datos proporcionada, nombre de usuario y / o contraseña no es válida, y una conexión a la base de datos no pudo ser establecida. Por favor, introduzca un host válido nombre de usuario y contraseña.',
'ERR_DB_LOGIN_FAILURE_MSSQL'                       => 'El host de base de datos proporcionada, nombre de usuario y / o contraseña no es válida, y una conexión a la base de datos no pudo ser establecida. Por favor, introduzca un host válido nombre de usuario y contraseña. ',
'ERR_DB_MYSQL_VERSION'                             => 'Su versión de MySQL (% s) no está soportada por el Sugar. Usted tendrá que instalar una versión que sea compatible con la aplicación de Sugar. Por favor, consulte la Matriz de compatibilidad en las notas de la versión para compatibles versiones de MySQL.',
'ERR_DB_NAME'                                      => 'El nombre de base de datos no puede estar en blanco.',
'ERR_DB_NAME2'                                     => 'El nombre de base de datos no puede contener un carácter &#039;\&#039;, &#039;/&#039; o &#039;.&#039;',
'ERR_DB_MYSQL_DB_NAME_INVALID'                     => 'El nombre de base de datos no puede contener un carácter &#039;\&#039;, &#039;/&#039; o &#039;.&#039;',
'ERR_DB_MSSQL_DB_NAME_INVALID'                     => 'El nombre de la base no puede comenzar con un número, &#039;#&#039;, o &#039;@&#039; y no puede contener un espacio, &#039;"&#039;," &#039;",&#039; * &#039;,&#039; / &#039;,&#039; \ &#039;,&#039; &#039;,&#039;: &#039;, &#039;<&#039;, &#039;>&#039;, &#039;&&#039;, o &#039;!&#039; &#039;-&#039;',
'ERR_DB_OCI8_DB_NAME_INVALID'                      => 'Nombre de base de datos sólo puede contener caracteres alfanuméricos y &#039;#&#039; los símbolos, &#039;_&#039; o &#039;$&#039;',
'ERR_DB_PASSWORD'                                  => 'Las contraseñas proporcionadas por el administrador de la base de datos de Sugar no coinciden. Por favor, vuelva a introducir la misma contraseña en los campos de contraseña.',
'ERR_DB_PRIV_USER'                                 => 'Proporcionar sin administrador de Base de Datos Nombre de usuario. El usuario es Requerido Para La Conexión Inicial a la Base de Datos.',
'ERR_DB_USER_EXISTS'                               => 'Nombre de usuario Para El usuario de la Base de Datos ya existe Sugar - No Se Puede CREAR Otro con el Mismo Nombre. Por favor, introduzca Un Nuevo Nombre de usuario.',
'ERR_DB_USER'                                      => 'Introduzca un nombre de usuario para el administrador de la base de Sugar.',
'ERR_DBCONF_VALIDATION'                            => 'Por favor, corrija los errores siguientes antes de continuar:',
'ERR_DBCONF_PASSWORD_MISMATCH'                     => 'Las contraseñas proporcionadas por el usuario de base de azúcar no son iguales. Por favor, vuelva a introducir la misma contraseña en los campos de contraseña.',
'ERR_ERROR_GENERAL'                                => 'Se encontraron los siguientes errores :',
'ERR_LANG_CANNOT_DELETE_FILE'                      => 'No se puede eliminar el archivo:',
'ERR_LANG_MISSING_FILE'                            => 'No se puede encontrar el archivo:',
'ERR_LANG_NO_LANG_FILE'                            => 'Archivo no encontrado en el paquete de idiomas include / lenguaje interior:',
'ERR_LANG_UPLOAD_1'                                => 'Hubo un problema con la subida. Por favor, inténtelo de nuevo.',
'ERR_LANG_UPLOAD_2'                                => 'Los paquetes de idiomas deben ser archivos ZIP.',
'ERR_LANG_UPLOAD_3'                                => 'PHP no pudo mover el archivo temporal en el directorio de actualización.',
'ERR_LICENSE_MISSING'                              => 'Faltan Campos Obligatorios',
'ERR_LICENSE_NOT_FOUND'                            => 'El archivo de licencia no se encuentra!',
'ERR_LOG_DIRECTORY_NOT_EXISTS'                     => 'Directorio de registro proporcionado no es un directorio válido.',
'ERR_LOG_DIRECTORY_NOT_WRITABLE'                   => 'Directorio de registro proporcionado no es un directorio escribible.',
'ERR_LOG_DIRECTORY_REQUIRED'                       => 'El directorio de registro es necesario si desea especificar su propio directorio.',
'ERR_NO_DIRECT_SCRIPT'                             => 'No se puede procesar directamente el script.',
'ERR_NO_SINGLE_QUOTE'                              => 'No se puede utilizar la comilla simple para',
'ERR_PASSWORD_MISMATCH'                            => 'Las contraseñas proporcionadas por el usuario admin Sugar no coinciden. Por favor, vuelva a introducir la misma contraseña en los campos de contraseña.',
'ERR_PERFORM_CONFIG_PHP_1'                         => 'No se puede escribir en el archivo config.php <span class=stop> </ span> archivo.',
'ERR_PERFORM_CONFIG_PHP_2'                         => 'Puede seguir esta instalación creando manualmente el archivo config.php y pegar la información de configuración abajo en el archivo config.php. Sin embargo, usted debe <strong> </ strong> crear el archivo config.php antes de continuar con el siguiente paso.',
'ERR_PERFORM_CONFIG_PHP_3'                         => '¿Se acordó crear el archivo config.php?',
'ERR_PERFORM_CONFIG_PHP_4'                         => 'Advertencia: No se pudo escribir en el archivo config.php. Por favor, asegúrese de que exista.',
'ERR_PERFORM_HTACCESS_1'                           => 'No se puede escribir en el',
'ERR_PERFORM_HTACCESS_2'                           => 'archivo.',
'ERR_PERFORM_HTACCESS_3'                           => 'Si desea proteger su archivo de registro de ser accesible a través del navegador, cree un archivo htaccess en su directorio de registro con la línea.:',
'ERR_PERFORM_NO_TCPIP'                             => '<b> No hemos podido detectar una conexión a Internet. </ b> Si usted tiene una conexión, por favor visite <a registrarse con SugarCRM. Al dejarnos saber un poco acerca de cómo su compañía planea utilizar SugarCRM, podemos asegurar que estamos entregando siempre la aplicación correcta para sus necesidades empresariales.',
'ERR_SESSION_DIRECTORY_NOT_EXISTS'                 => 'La sesión del directorio proporcionado no es un directorio válido.',
'ERR_SESSION_DIRECTORY'                            => 'La sesión del directorio proporcionado no es un directorio escribible.',
'ERR_SESSION_PATH'                                 => 'Debe especificar la ruta de la sesión si desea especificar una.',
'ERR_SI_NO_CONFIG'                                 => 'Usted no incluyó config_si.php en la raíz del documento, o no se ha definido en config.php $ sugar_config_si',
'ERR_SITE_GUID'                                    => 'La ID de aplicación es necesaria si desea especificar su propio ID.',
'ERROR_SPRITE_SUPPORT'                             => 'Actualmente no es capaz de localizar la biblioteca GD, como resultado, usted no será capaz de utilizar la funcionalidad de Sprite CSS.',
'ERR_UPLOAD_MAX_FILESIZE'                          => 'Advertencia: La configuración de PHP debe ser cambiado para permitir que los archivos de al menos 6 MB para cargar.',
'LBL_UPLOAD_MAX_FILESIZE_TITLE'                    => 'Tamaño de subida del fichero',
'ERR_URL_BLANK'                                    => 'Provide the base URL for the Sugar instance.',
'ERR_UW_NO_UPDATE_RECORD'                          => 'No se pudo encontrar registro de instalación',
'ERROR_FLAVOR_INCOMPATIBLE'                        => 'El archivo subido no es compatible con este sabor (Community Edition, Professional o Enterprise) de Sugar:',
'ERROR_LICENSE_EXPIRED'                            => 'Error: Su licencia ha expirado',
'ERROR_LICENSE_EXPIRED2'                           => 'día (s) antes. Por favor, vaya a "Administración de licencias" la href=&#039;index.php?action=LicenseSettings&module=Administration&#039;> <a &#039;</ a> en la pantalla de administración para ingresar la clave de licencia nueva. Si no se introduce una nueva clave de licencia dentro de los 30 días de su vencimiento clave de licencia, ya no será capaz de acceder a esta aplicación.',
'ERROR_MANIFEST_TYPE'                              => 'El archivo de manifiesto debe indicar el tipo de paquete.',
'ERROR_PACKAGE_TYPE'                               => 'El archivo de manifiesto especifica un tipo de paquete no reconocido',
'ERROR_VALIDATION_EXPIRED'                         => 'Error: Su licencia ha expirado',
'ERROR_VALIDATION_EXPIRED2'                        => 'día (s) antes. Por favor, vaya a "Administración de licencias" la href=&#039;index.php?action=LicenseSettings&module=Administration&#039;> <a &#039;</ a> en la pantalla de administración para ingresar la clave nueva validación. Si no se introduce una nueva clave de validación dentro de los 30 días de su vencimiento clave de validación, usted ya no será capaz de acceder a esta aplicación.',
'ERROR_VERSION_INCOMPATIBLE'                       => 'El archivo subido no es compatible con esta versión de Sugar:',
'LBL_BACK'                                         => 'Atrás',
'LBL_CANCEL'                                       => 'Cancelar',
'LBL_ACCEPT'                                       => 'Acepto',
'LBL_CHECKSYS_1'                                   => 'Para que su instalación de SugarCRM funcione correctamente, asegúrese de que todos los elementos del sistema de verificación se enumeran a continuación son de color verde. Si son de color rojo, por favor tome las medidas necesarias para solucionarlos. <BR> Para obtener ayuda sobre estas comprobaciones del sistema, visite el <a href = "http://www.sugarcrm.com/crm/installation" target = "_blank"> Sugar Wiki </ a>.',
'LBL_CHECKSYS_CACHE'                               => 'La cache de subdirectorios es escribible ',
'LBL_DROP_DB_CONFIRM'                              => 'El nombre de la base de datos siempre que ya existe <br> Usted puede:. <br> 1. Haga clic en el botón Cancelar y elija un nombre de base de datos nueva o <br> 2. Haga clic en el botón Aceptar y continuar. Todas las tablas existentes en la base de datos será dado de baja. <strong> Esto significa que todas las tablas y los datos pre-existentes serán arrastrados. </ strong>',
'LBL_CHECKSYS_CALL_TIME'                           => 'PHP Permitie que el Tiempo de llamada Referencia Pass se desactive',
'LBL_CHECKSYS_COMPONENT'                           => 'Componente',
'LBL_CHECKSYS_COMPONENT_OPTIONAL'                  => 'Componentes opcionales',
'LBL_CHECKSYS_CONFIG'                              => 'El archivo de configuración de SugarCRM es escribible (config.php)',
'LBL_CHECKSYS_CONFIG_OVERRIDE'                     => 'El archivo de configuración de SugarCRM es escribible (config_override.php)',
'LBL_CHECKSYS_CURL'                                => 'Módulo cURL',
'LBL_CHECKSYS_SESSION_SAVE_PATH'                   => 'Configuración de la ruta de guardado de la sessión',
'LBL_CHECKSYS_CUSTOM'                              => 'Directorio personalizado escribible',
'LBL_CHECKSYS_DATA'                                => 'Datos del sub-directorio son escribibles',
'LBL_CHECKSYS_IMAP'                                => 'Módulos IMAP',
'LBL_CHECKSYS_FASTCGI'                             => 'FastCGI',
'LBL_CHECKSYS_MQGPC'                               => 'Magic Quotes GPC',
'LBL_CHECKSYS_MBSTRING'                            => 'Módulo MB Strings',
'LBL_CHECKSYS_MEM_OK'                              => 'OK (Sin límite)',
'LBL_CHECKSYS_MEM_UNLIMITED'                       => 'OK (Ilimitado)',
'LBL_CHECKSYS_MEM'                                 => 'Limite de memoria PHP',
'LBL_CHECKSYS_MODULE'                              => 'Módulos programables de sub-directorios y archivos',
'LBL_CHECKSYS_MYSQL_VERSION'                       => 'Versión MySQL',
'LBL_CHECKSYS_NOT_AVAILABLE'                       => 'No disponible',
'LBL_CHECKSYS_OK'                                  => 'OK',
'LBL_CHECKSYS_PHP_INI'                             => 'Ubicación del archivo de configuración de PHP (php.ini):',
'LBL_CHECKSYS_PHP_OK'                              => 'OK (ver ',
'LBL_CHECKSYS_PHPVER'                              => 'Versión PHP',
'LBL_CHECKSYS_IISVER'                              => 'Versión IIS',
'LBL_CHECKSYS_RECHECK'                             => 'Volver a comprobar',
'LBL_CHECKSYS_SAFE_MODE'                           => 'PHP Modo seguro desactivado',
'LBL_CHECKSYS_SESSION'                             => 'Writable Session Save Path (',
'LBL_CHECKSYS_STATUS'                              => 'Estado',
'LBL_CHECKSYS_TITLE'                               => 'Sistema de aceptación de chequeos',
'LBL_CHECKSYS_VER'                                 => 'Encontrado: ( ver ',
'LBL_CHECKSYS_XML'                                 => 'XML Parsing',
'LBL_CHECKSYS_ZLIB'                                => 'ZLIB Módulo de Compresión',
'LBL_CHECKSYS_ZIP'                                 => 'Manejo del módulo ZIP',
'LBL_CHECKSYS_FIX_FILES'                           => 'Por favor, corrija los siguientes archivos o directorios antes de continuar:',
'LBL_CHECKSYS_FIX_MODULE_FILES'                    => 'Por favor, corrija los siguientes directorios del módulo y los archivos debajo de ellos antes de continuar:',
'LBL_CHECKSYS_UPLOAD'                              => 'Directorio de subida es accesible a escritura',
'LBL_CLOSE'                                        => 'Cerrar',
'LBL_THREE'                                        => '3',
'LBL_CONFIRM_BE_CREATED'                           => 'crearse',
'LBL_CONFIRM_DB_TYPE'                              => 'Tipo de base de datos',
'LBL_CONFIRM_DIRECTIONS'                           => 'Por favor, confirme los ajustes siguientes. Si desea cambiar alguno de los valores, haga clic en "Volver" para editar. De lo contrario, haga clic en "Siguiente" para comenzar la instalación.',
'LBL_CONFIRM_LICENSE_TITLE'                        => 'Información de licencia',
'LBL_CONFIRM_NOT'                                  => 'no',
'LBL_CONFIRM_TITLE'                                => 'Confirmar parámetros',
'LBL_CONFIRM_WILL'                                 => 'querer',
'LBL_DBCONF_CREATE_DB'                             => 'Crear base de datos',
'LBL_DBCONF_CREATE_USER'                           => 'Crear usuario',
'LBL_DBCONF_DB_DROP_CREATE_WARN'                   => 'Precaución: Todos los datos se borrarán de Sugar <br> si esta casilla está marcada.',
'LBL_DBCONF_DB_DROP_CREATE'                        => 'Quite y Recrear las tablas existentes de Sugar?',
'LBL_DBCONF_DB_DROP'                               => 'Eliminar tablas',
'LBL_DBCONF_DB_NAME'                               => 'Nombre de base de datos',
'LBL_DBCONF_DB_PASSWORD'                           => 'Contraseña de usuario de la base de datos de Sugar',
'LBL_DBCONF_DB_PASSWORD2'                          => 'Vuelva a introducir su contraseña de usuario de base de datos de Sugar',
'LBL_DBCONF_DB_USER'                               => 'Nombre de usuario de la base de datos de Sugar',
'LBL_DBCONF_SUGAR_DB_USER'                         => 'Nombre de usuario de la base de datos de Sugar',
'LBL_DBCONF_DB_ADMIN_USER'                         => 'Nombre de usuario de Administrador de la base de datos de Sugar',
'LBL_DBCONF_DB_ADMIN_PASSWORD'                     => 'Contraseña de usuario de Administrador de la base de datos de Sugar',
'LBL_DBCONF_DEMO_DATA'                             => 'Llenar la base de datos con datos de demostración?',
'LBL_DBCONF_DEMO_DATA_TITLE'                       => 'Elegir datos de demostración',
'LBL_DBCONF_HOST_NAME'                             => 'Nombre del Host',
'LBL_DBCONF_HOST_INSTANCE'                         => 'Instancia del Host',
'LBL_DBCONF_HOST_PORT'                             => 'Puerto',
'LBL_DBCONF_INSTRUCTIONS'                          => 'Por favor ingrese su información de configuración de base de datos a continuación. Si no está seguro de lo que debe rellenar, le sugerimos que utilice los valores predeterminados.',
'LBL_DBCONF_MB_DEMO_DATA'                          => 'Usar múltiples bytes de texto en datos de demostración?',
'LBL_DBCONFIG_MSG2'                                => 'Nombre de servidor de web o de la máquina (host) en el que se encuentra la base de datos (como localhost o www.mydomain.com):',
'LBL_DBCONFIG_MSG3'                                => 'Nombre de la base de datos que contendrá los datos de la instancia de Sugar que va a instalar:',
'LBL_DBCONFIG_B_MSG1'                              => 'El nombre de usuario y la contraseña de un administrador de base de datos que se pueden crear tablas de bases de datos y usuarios que puede escribir en la base de datos son necesarios para crear la base de datos de Sugar.',
'LBL_DBCONFIG_SECURITY'                            => 'Por motivos de seguridad, puede especificar un usuario de base de datos exclusiva para conectarse a la base de datos de Sugar. Este usuario debe ser capaz de escribir, actualizar y recuperar datos de la base de datos de azúcar que se crearán para esta instancia. Este usuario puede ser el administrador de base de datos especificado anteriormente, o puede proporcionar información de base de datos de usuario nuevo o existente.',
'LBL_DBCONFIG_AUTO_DD'                             => 'Hazlo por mí',
'LBL_DBCONFIG_PROVIDE_DD'                          => 'Proporcionar usuario existente',
'LBL_DBCONFIG_CREATE_DD'                           => 'Definir usuario a crear',
'LBL_DBCONFIG_SAME_DD'                             => 'Igual que el usuario Admin',
'LBL_FTS'                                          => 'Búsqueda de texto completo',
'LBL_FTS_INSTALLED'                                => 'instalado',
'LBL_FTS_INSTALLED_ERR1'                           => 'Funcionalidad de búsqueda de texto no está instalada.',
'LBL_FTS_INSTALLED_ERR2'                           => 'Todavía se puede instalar, pero no será capaz de utilizar la funcionalidad de búsqueda de texto. Por favor, consulte a su servidor de base de datos de Guía de instalación sobre la forma de hacer esto, o póngase en contacto con el administrador.',
'LBL_DBCONF_PRIV_PASS'                             => 'Contraseña de usuario de base de datos con privilegios',
'LBL_DBCONF_PRIV_USER_2'                           => 'El usuario de la base de datos indicado arriba es un usuario privilegiado ?',
'LBL_DBCONF_PRIV_USER_DIRECTIONS'                  => 'Este usuario de la base de datos privilegiado debe tener los permisos apropiados para crear una base de datos, borrar/crear tablas y crear usuarios. Este usuario solo se usara para realizar las tareas necesarias durante la instalación. También puede utilizar el usuario de la base misma que la anterior, si el usuario tiene privilegios suficientes.',
'LBL_DBCONF_PRIV_USER'                             => 'Usuario de la base de datos con privilegios',
'LBL_DBCONF_TITLE'                                 => 'Configuración de la base de datos',
'LBL_DBCONF_TITLE_NAME'                            => 'Proporcione el nombre de base de datos',
'LBL_DBCONF_TITLE_USER_INFO'                       => 'Proporcionar información de usuario de la base de datos ',
'LBL_DISABLED_DESCRIPTION_2'                       => 'Después de este cambio se ha hecho, puede hacer clic en el botón "Inicio" para comenzar la instalación. <i> Después de la instalación, tendrá que cambiar el valor de &#039;installer_locked&#039; a &#039;true&#039;. </ i>',
'LBL_DISABLED_DESCRIPTION'                         => 'El programa de instalación ya se ha ejecutado una vez. Como medida de seguridad, se ha desactivado la ejecución de una segunda vez. Si está absolutamente seguro de que desea que se ejecute de nuevo, por favor vaya a su archivo config.php y busque (o añadir) una variable llamada &#039;installer_locked&#039; y ponerlo en &#039;false&#039;. La línea debería tener este aspecto:',
'LBL_DISABLED_HELP_1'                              => 'Si necesita ayuda para la instalación, por favor visite el SugarCRM',
'LBL_DISABLED_HELP_LNK'                            => 'http://www.sugarcrm.com/forums/',
'LBL_DISABLED_HELP_2'                              => 'Foros de soporte',
'LBL_DISABLED_TITLE_2'                             => 'Instalación SugarCRM ha sido desactivada',
'LBL_DISABLED_TITLE'                               => 'Instalación SugarCRM está desactivada',
'LBL_EMAIL_CHARSET_DESC'                           => 'Conjunto de caracteres más utilizado en el entorno local',
'LBL_EMAIL_CHARSET_TITLE'                          => 'Configuración de correo electrónico saliente',
'LBL_EMAIL_CHARSET_CONF'                           => 'Juego de caracteres para el correo electrónico saliente',
'LBL_HELP'                                         => 'Ayuda',
'LBL_INSTALL'                                      => 'Instalar',
'LBL_INSTALL_TYPE_TITLE'                           => 'Opciones de instalación',
'LBL_INSTALL_TYPE_SUBTITLE'                        => 'Elija tipo de instalación',
'LBL_INSTALL_TYPE_TYPICAL'                         => '<b> Instalación típica </ b>',
'LBL_INSTALL_TYPE_CUSTOM'                          => '<b> Instalación personalizada </ b>',
'LBL_INSTALL_TYPE_MSG1'                            => 'La clave es necesaria para la funcionalidad de aplicación general, pero no es necesario para la instalación. No es necesario introducir la clave en este momento, pero usted tendrá que proporcionar la clave después de haber instalado la aplicación.',
'LBL_INSTALL_TYPE_MSG2'                            => 'Se requiere información mínima para la instalación. Recomendado para los nuevos usuarios.',
'LBL_INSTALL_TYPE_MSG3'                            => 'Ofrece opciones adicionales para configurar durante la instalación. La mayoría de estas opciones también están disponibles después de la instalación de las pantallas de administración. Se recomienda para usuarios avanzados.',
'LBL_LANG_1'                                       => 'Para utilizar un lenguaje en el Sugar que no sea el idioma por defecto (US-Inglés), puede cargar e instalar el paquete de idioma en este momento. Usted será capaz de cargar e instalar los paquetes de idioma desde la aplicación de Sugar. Si desea omitir este paso, haga clic en Siguiente.',
'LBL_LANG_BUTTON_COMMIT'                           => 'Instalar',
'LBL_LANG_BUTTON_REMOVE'                           => 'Quitar',
'LBL_LANG_BUTTON_UNINSTALL'                        => 'Desinstalar',
'LBL_LANG_BUTTON_UPLOAD'                           => 'Subir',
'LBL_LANG_NO_PACKS'                                => 'ninguno',
'LBL_LANG_PACK_INSTALLED'                          => 'Los paquetes de idioma que ya están instalados son los siguientes:',
'LBL_LANG_PACK_READY'                              => 'Los siguientes paquetes de idioma están listos para ser instalados:',
'LBL_LANG_SUCCESS'                                 => 'El paquete de idioma se ha cargado con éxito.',
'LBL_LANG_TITLE'                                   => 'Paquete de idioma',
'LBL_LAUNCHING_SILENT_INSTALL'                     => 'Instalando Sugar ahora. Esto puede tomar hasta unos pocos minutos.',
'LBL_LANG_UPLOAD'                                  => 'Sube un paquete de idioma',
'LBL_LICENSE_ACCEPTANCE'                           => 'Aceptación de licencia',
'LBL_LICENSE_CHECKING'                             => 'Comprobación de la compatibilidad del sistema.',
'LBL_LICENSE_CHKENV_HEADER'                        => 'Comprobación del entorno',
'LBL_LICENSE_CHKDB_HEADER'                         => 'Verificación de Credenciales de la base de datos.',
'LBL_LICENSE_CHECK_PASSED'                         => 'Sistema aprobado; Comprobar la compatibilidad.',
'LBL_LICENSE_REDIRECT'                             => 'Redireccionando',
'LBL_LICENSE_DIRECTIONS'                           => 'Si usted tiene su información de licencia, por favor escríbalo en el campo de abajo.',
'LBL_LICENSE_DOWNLOAD_KEY'                         => 'Ingrese la clave de descarga',
'LBL_LICENSE_EXPIRY'                               => 'Fecha de expiración',
'LBL_LICENSE_I_ACCEPT'                             => 'Acepto',
'LBL_LICENSE_NUM_USERS'                            => 'Número de usuarios',
'LBL_LICENSE_OC_DIRECTIONS'                        => 'Por favor, introduzca el número de clientes comprados fuera de línea.',
'LBL_LICENSE_OC_NUM'                               => 'Number of Offline Client Licenses',
'LBL_LICENSE_OC'                                   => 'Número de licencias de cliente sin conexión',
'LBL_LICENSE_PRINTABLE'                            => 'Vista para imprimir',
'LBL_PRINT_SUMM'                                   => 'Imprimir resumen',
'LBL_LICENSE_TITLE_2'                              => 'Licencia SugarCRM',
'LBL_LICENSE_TITLE'                                => 'Información de licencia',
'LBL_LICENSE_USERS'                                => 'Usuarios con licencia',
'LBL_LOCALE_CURRENCY'                              => 'Configuración de divisas',
'LBL_LOCALE_CURR_DEFAULT'                          => 'Moneda predeterminada',
'LBL_LOCALE_CURR_SYMBOL'                           => 'Símbolo de moneda',
'LBL_LOCALE_CURR_ISO'                              => 'Código de moneda (ISO 4217)',
'LBL_LOCALE_CURR_1000S'                            => 'Separador de 1000',
'LBL_LOCALE_CURR_DECIMAL'                          => 'Separador Decimal',
'LBL_LOCALE_CURR_EXAMPLE'                          => 'Ejemplo',
'LBL_LOCALE_CURR_SIG_DIGITS'                       => 'Dígitos significativos',
'LBL_LOCALE_DATEF'                                 => 'Formato de fecha por defecto',
'LBL_LOCALE_DESC'                                  => 'La configuración regional especificados se refleja globalmente en el caso de Sugar',
'LBL_LOCALE_EXPORT'                                => 'Conjunto de caracteres para <br> Importar / Exportar <i> (Email,. Csv, vCard, PDF, importación de datos) </ i>',
'LBL_LOCALE_EXPORT_DELIMITER'                      => 'Exportación (. Csv) Delimitador',
'LBL_LOCALE_EXPORT_TITLE'                          => 'Configuraciones Importar / exportar',
'LBL_LOCALE_LANG'                                  => 'Lenguaje por defecto',
'LBL_LOCALE_NAMEF'                                 => 'Nombre del formato por defecto',
'LBL_LOCALE_NAMEF_DESC'                            => 's = saludo <br /> <br n = nombre /> l = apellido',
'LBL_LOCALE_NAME_FIRST'                            => 'David',
'LBL_LOCALE_NAME_LAST'                             => 'Livingstone',
'LBL_LOCALE_NAME_SALUTATION'                       => 'Dr.',
'LBL_LOCALE_TIMEF'                                 => 'Formato de hora por defecto ',
'LBL_LOCALE_TITLE'                                 => 'Configuración regional',
'LBL_CUSTOMIZE_LOCALE'                             => 'Personalizar la configuración regional',
'LBL_LOCALE_UI'                                    => 'Interfaz de usuario',
'LBL_ML_ACTION'                                    => 'Acción',
'LBL_ML_DESCRIPTION'                               => 'Descripción',
'LBL_ML_INSTALLED'                                 => 'Fecha de instalación',
'LBL_ML_NAME'                                      => 'Nombre',
'LBL_ML_PUBLISHED'                                 => 'Fecha de publicación',
'LBL_ML_TYPE'                                      => 'Tipo',
'LBL_ML_UNINSTALLABLE'                             => 'Desinstalador',
'LBL_ML_VERSION'                                   => 'Versión',
'LBL_MSSQL'                                        => 'Servidor SQL',
'LBL_MSSQL2'                                       => 'Servidor SQL (FreeTDS)',
'LBL_MSSQL_SQLSRV'                                 => 'Servidor SQL  (Microsoft SQL Server Driver for PHP) ',
'LBL_MYSQL'                                        => 'MySQL',
'LBL_MYSQLI'                                       => 'MySQL (mysqli extension) ',
'LBL_IBM_DB2'                                      => 'IBM DB2 ',
'LBL_NEXT'                                         => 'Siguiente',
'LBL_NO'                                           => 'No',
'LBL_ORACLE'                                       => 'Oracle',
'LBL_PERFORM_ADMIN_PASSWORD'                       => 'Configuración de la contraseña de administrador del sitio',
'LBL_PERFORM_AUDIT_TABLE'                          => 'auditoría tabla /',
'LBL_PERFORM_CONFIG_PHP'                           => 'Creación de archivo de configuración de Sugar',
'LBL_PERFORM_CREATE_DB_1'                          => '<b> Crear la base de datos </ b>',
'LBL_PERFORM_CREATE_DB_2'                          => ' <b>on</b> ',
'LBL_PERFORM_CREATE_DB_USER'                       => 'Creación de usuario y contraseña  de la base de datos de...',
'LBL_PERFORM_CREATE_DEFAULT'                       => 'Creación de datos por defecto del Sugar',
'LBL_PERFORM_CREATE_LOCALHOST'                     => 'Creación de datos por defecto de Sugar...',
'LBL_PERFORM_CREATE_RELATIONSHIPS'                 => 'Creación de relaciones de tablas de Sugar ',
'LBL_PERFORM_CREATING'                             => 'creando / ',
'LBL_PERFORM_DEFAULT_REPORTS'                      => 'Creación de informes predeterminados',
'LBL_PERFORM_DEFAULT_SCHEDULER'                    => 'Creando programa de trabajos por defecto',
'LBL_PERFORM_DEFAULT_SETTINGS'                     => 'Inserción de la configuración predeterminada',
'LBL_PERFORM_DEFAULT_USERS'                        => 'Creación de usuarios por defecto',
'LBL_PERFORM_DEMO_DATA'                            => 'Llenando las tablas de base de datos con datos de ejemplo (esto puede tardar un poco)',
'LBL_PERFORM_DONE'                                 => 'Hecho<br>',
'LBL_PERFORM_DROPPING'                             => 'dropping / ',
'LBL_PERFORM_FINISH'                               => 'Terminar',
'LBL_PERFORM_LICENSE_SETTINGS'                     => 'Actualización de la información de licencia',
'LBL_PERFORM_OUTRO_1'                              => 'La configuración de Sugar',
'LBL_PERFORM_OUTRO_2'                              => 'Se ha completado!',
'LBL_PERFORM_OUTRO_3'                              => 'Tiempo total:',
'LBL_PERFORM_OUTRO_4'                              => 'segundos.',
'LBL_PERFORM_OUTRO_5'                              => 'Memoria utilizada aproximada:',
'LBL_PERFORM_OUTRO_6'                              => ' bytes.',
'LBL_PERFORM_OUTRO_7'                              => 'Su sistema ya está instalado y configurado para su uso.',
'LBL_PERFORM_REL_META'                             => 'relationship meta ... ',
'LBL_PERFORM_SUCCESS'                              => 'Éxito!',
'LBL_PERFORM_TABLES'                               => 'Creación de tablas de aplicación, tablas de auditoría y los metadatos relación de Sugar ',
'LBL_PERFORM_TITLE'                                => 'Realice la configuración',
'LBL_PRINT'                                        => 'Imprimir',
'LBL_REG_CONF_1'                                   => 'Por favor complete el formulario a continuación para recibir anuncios de productos, noticias, formación, ofertas especiales e invitaciones para eventos especiales de SugarCRM. No vendemos, alquilamos, compartir o distribuir la información recogida aquí a terceros.',
'LBL_REG_CONF_2'                                   => 'Su nombre y dirección de correo electrónico son los únicos campos necesarios para el registro. Todos los demás campos son opcionales, pero muy útil. No vendemos, alquilamos, compartimos o distribuir la información recogida aquí a terceros.',
'LBL_REG_CONF_3'                                   => 'Gracias por registrarse. Haga clic en el botón Finalizar para iniciar sesión en SugarCRM. Usted tendrá que iniciar la sesión por primera vez con el nombre de usuario "admin" y la contraseña que introdujo en el paso 2.',
'LBL_REG_TITLE'                                    => 'Inscripción',
'LBL_REG_NO_THANKS'                                => 'No, gracias',
'LBL_REG_SKIP_THIS_STEP'                           => 'Saltar este paso',
'LBL_REQUIRED'                                     => '*Campo requerido',
'LBL_SITECFG_ADMIN_Name'                           => 'Nombre de administrador de Sugar',
'LBL_SITECFG_ADMIN_PASS_2'                         => 'Vuelva a introducir la contraseña del usuario admin',
'LBL_SITECFG_ADMIN_PASS_WARN'                      => 'Precaución: Esto anulará la contraseña de administrador de cualquier instalación anterior.',
'LBL_SITECFG_ADMIN_PASS'                           => 'Contraseña del usuario admin',
'LBL_SITECFG_APP_ID'                               => 'ID de la aplicación',
'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'                 => 'Si es seleccionado, usted debe proporcionar un ID de aplicación para reemplazar el ID generado automáticamente. La identificación asegura que las sesiones de una instancia de Sugar no son utilizados por otras instancias. Si usted tiene un grupo de instalaciones de Sugar, todos ellos deben compartir la identificación de la misma aplicación.',
'LBL_SITECFG_CUSTOM_ID'                            => 'Proporcione su propia ID de aplicación',
'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'                => 'Si se selecciona, se debe especificar un directorio de registro para anular el directorio predeterminado para el registro de Sugar. Independientemente de la ubicación del archivo de registro se encuentra, el acceso a ella a través de un navegador web será restringido a través de un archivo. Htaccess redirect.',
'LBL_SITECFG_CUSTOM_LOG'                           => 'Utilizar un directorio de registro personalizado',
'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'            => 'Si es seleccionado, usted debe proporcionar una carpeta segura para almacenar información de la sesión. Esto se puede hacer para evitar que los datos de sesión de ser vulnerable en los servidores compartidos.',
'LBL_SITECFG_CUSTOM_SESSION'                       => 'Utilizar un directorio de sesión personalizado para Sugar',
'LBL_SITECFG_DIRECTIONS'                           => 'Por favor ingrese su información de configuración del sitio Web más abajo. Si no está seguro de los campos, le sugerimos que utilice los valores predeterminados.',
'LBL_SITECFG_FIX_ERRORS'                           => '<b> Por favor, corrija los errores siguientes antes de continuar: </ b>',
'LBL_SITECFG_LOG_DIR'                              => 'Directorio del registro',
'LBL_SITECFG_SESSION_PATH'                         => 'Ruta del directorio de la sesión <br>(debe tener permisos de escritura)',
'LBL_SITECFG_SITE_SECURITY'                        => 'Seleccione Opciones de seguridad',
'LBL_SITECFG_SUGAR_UP_DIRECTIONS'                  => 'Si se selecciona, el sistema comprobará periódicamente versiones actualizadas de la aplicación.',
'LBL_SITECFG_SUGAR_UP'                             => 'Comprobar automáticamente si hay actualizaciones?',
'LBL_SITECFG_SUGAR_UPDATES'                        => 'Configuración de actualizaciones de Sugar',
'LBL_SITECFG_TITLE'                                => 'Configuración del sitio',
'LBL_SITECFG_TITLE2'                               => 'Identificar administración de usuarios',
'LBL_SITECFG_SECURITY_TITLE'                       => 'Seguridad del Sitio',
'LBL_SITECFG_URL'                                  => 'URL Instancia de Sugar',
'LBL_SITECFG_USE_DEFAULTS'                         => 'Utilizar las opciones predeterminadas?',
'LBL_SITECFG_ANONSTATS'                            => 'Enviar estadísticas anónimas de uso?',
'LBL_SITECFG_ANONSTATS_DIRECTIONS'                 => 'Si se selecciona, Sugar enviará <b> anónimo </ b> información sobre la instalación de SugarCRM Inc. cada vez que el sistema comprueba si hay nuevas versiones. Esta información le ayudará a entender mejor cómo se utiliza la aplicación y orientar las mejoras al producto.',
'LBL_SITECFG_URL_MSG'                              => 'Introduzca la dirección URL que se utiliza para acceder a la instancia de Sugar después de la instalación. El URL también se puede utilizar como una base para las URLs de las páginas de Sugar de aplicación. La URL debe incluir el servidor web o el nombre del equipo o la dirección IP.',
'LBL_SITECFG_SYS_NAME_MSG'                         => 'Escriba un nombre para el sistema. Este nombre se mostrará en la barra de título del navegador cuando el usuario visita la aplicación de Sugar.',
'LBL_SITECFG_PASSWORD_MSG'                         => 'Después de la instalación, deberá utilizar el usuario admin Sugar (nombre de usuario predeterminado = admin) para iniciar sesión en la instancia de Sugar. Introduzca una contraseña para este usuario administrador. Esta contraseña puede ser cambiada después de la sesión inicial. También puede ingresar otro nombre de usuario de administrador para utilizar además el valor predeterminado que se proporciona.',
'LBL_SITECFG_COLLATION_MSG'                        => 'Seleccione intercalación (clasificación) para su sistema. Esta configuración crea las tablas con el lenguaje específico que utilice. En caso de que su lenguaje no requiere ajustes especiales por favor utilice el valor predeterminado.',
'LBL_SPRITE_SUPPORT'                               => 'Soporte Sprite',
'LBL_SYSTEM_CREDS'                                 => 'sistema de Verificación de Poderes',
'LBL_SYSTEM_ENV'                                   => 'Entorno del sistema',
'LBL_START'                                        => 'Iniciar',
'LBL_SHOW_PASS'                                    => 'Mostrar contraseñas',
'LBL_HIDE_PASS'                                    => 'Esconder contraseñas ',
'LBL_HIDDEN'                                       => '<i>(oculto)</i>',
'LBL_CHOOSE_LANG'                                  => '<b>Elija su idioma</b>',
'LBL_STEP'                                         => 'Paso',
'LBL_TITLE_WELCOME'                                => 'BIenvenido a SugarCRM ',
'LBL_WELCOME_1'                                    => 'Este instalador crea las tablas de la base de SugarCRM y establece las variables de configuración que necesita para comenzar. Todo el proceso debe tomar aproximadamente diez minutos.',
'LBL_WELCOME_2'                                    => 'Para la documentación de la instalación, por favor visite la <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Sugar Wiki </ a>. <BR> <BR> También puede encontrar la ayuda de la Comunidad de azúcar en la <a href="http://www.sugarcrm.com/forums/" target="_blank"> Foros Sugar </ a>.',
'LBL_TITLE_ARE_YOU_READY'                          => '¿Estás listo para instalar?',
'REQUIRED_SYS_COMP'                                => 'Componentes del sistema necesarios',
'REQUIRED_SYS_COMP_MSG'                            => 'Antes de empezar, asegúrese de que dispone de las versiones compatibles de los siguientes sistemas
                       componentes: <br>
                       <ul>
                       <li> Base de datos / Database Management System (Ejemplos: MySQL, SQL Server, Oracle) </ li>
                       <li> servidor web (Apache, IIS) </ li>
                       </ ul>
                       Consulte la Matriz de compatibilidad en las notas de la versión para
                       componentes de sistemas compatibles para la versión de azúcar que va a instalar.<br>',
'REQUIRED_SYS_CHK'                                 => 'Comprobación  Inicial del Sistema',
'REQUIRED_SYS_CHK_MSG'                             => 'Cuando usted comienza el proceso de instalación, una comprobación del sistema se llevará a cabo en el servidor Web en el que los archivos de azúcar se encuentran con el fin de
                       asegúrese de que el sistema esté configurado correctamente y tiene todos los componentes necesarios
                       para completar con éxito la instalación. <br><br>
                       El sistema comprueba todos los siguientes: <br>
                       <ul>
                       <li> <b> versión de PHP </ b> - debe ser compatible
                       con la aplicación </ li>
                                         <li> <b> Sesión Variables </ b> - debe estar funcionando correctamente </ li>
                                             <li> <b> Strings MB </ b> - debe estar instalado y habilitado en php.ini </ li>

                       <li> <b> Soporte Base de datos </ b> - debe existir para MySQL, SQL
                       Server u Oracle </ li>

                       <li> <b> config.php </ b> - debe existir y debe tener la adecuada
                                   Permisos para darle permisos de escritura </ li>
<li> Los archivos del azúcar como consecuencia debe ser regrabable: <ul> <li> <b> / personalizada </ li>
<li> / cache </ li>
<li> / modules </ b> </ li> </ ul> </ li> </ ul>
                                   Si la verificación falla, no será capaz de continuar con la instalación. Un mensaje de error aparecerá, explicando por qué el sistema
                                   no pasó la verificación.
                                   Después de hacer los cambios necesarios, puede someterse al sistema
                                   comprobar de nuevo para continuar la instalación.<br>',
'REQUIRED_INSTALLTYPE'                             => 'Instalación típica o personalizada',
'REQUIRED_INSTALLTYPE_MSG'                         => 'Después de la comprobación del sistema se lleva a cabo, puede elegir cualquiera de los dos
                      la típica o la instalación personalizada. <br>
                      Para ambos <b> típicos </ b> y <b> personalizados </ b> de las instalaciones, deberá saber lo siguiente: <br>
                      <ul>
                      <li> <b> Tipo de base de datos </ b> que albergará los datos de azúcar <ul> <li> Compatible base de datos
                      tipos: MySQL, MS SQL Server, Oracle <br><br> </ li> </ ul> </ li>.
                      <li> <b> Nombre del servidor web </ b> o de la máquina (host) en el que se encuentra la base de datos
                      <ul> <li> Esto puede ser <i> localhost </ i> si la base de datos está en el equipo local o se encuentra en el mismo servidor web o de la máquina como archivos de Azúcar. <br> </ li> < / ul> </ li>
                      <li> <b> Nombre de la base de datos </ b> que desea utilizar para alojar los datos de azúcar </ li>
                        <ul>
                          <li> Es posible que ya tienen una base de datos existente que desea utilizar. Si
                          se proporciona el nombre de una base de datos existente, las tablas de la base de datos se
                          se redujo durante la instalación cuando el esquema de la base de datos de Sugar está definido. </ li>
                          <li> Si aún no dispone de una base de datos, el nombre que proporcione se utilizará para
                          la nueva base de datos que se crea para la instancia durante la instalación. <br> </ li>
                        </ Ul>
                      <li> Database <b> administrador nombre de usuario y contraseña </ b> <ul> <li> El administrador de base de datos debe ser capaz de crear tablas y usuarios y escribir en la base de datos. </ li> <li> Es posible que necesite
                      póngase en contacto con su administrador de base de datos para esta información si la base de datos
                      no encuentra en el equipo local y / o si usted no es el administrador de base de datos. <br> </ ul> </ li> </ li>
                      <li> Sugar <b> base de datos de nombre de usuario y la contraseña </ b>
                      </ Li>
                        <ul>
                          <li> El usuario puede ser el administrador de la base de datos, o puede proporcionar el nombre de
                          otro usuario de base de datos existente. </ Li>
                          <li> Si desea crear un nuevo usuario de base para este propósito, se quiere
                          ser capaz de proporcionar un nuevo nombre de usuario y una contraseña durante el proceso de instalación,
                          y el usuario será creado durante la instalación. </ Li>
                        </ Ul> </ ul> <p>

                      Por encargo <b> </ b> de configuración, es posible que necesite saber lo siguiente: <br>
                      <ul>
                      URL <li> <b> que se utilizará para acceder a la instancia de azúcar </ b> después de su instalación.
                      Esta URL debe incluir el servidor web o el nombre del equipo o la dirección IP. <br> </ Li>
                                  <li> [Opcional] <b> Ruta al directorio de sesión </ b> si desea utilizar una costumbre
                                  sesión de directorio de información de azúcar con el fin de evitar que los datos de sesión de
                                  ser vulnerable en los servidores compartidos. <br> </ li>
                                  <li> [Opcional] <b> Ruta a un directorio de registro personalizado </ b> si desea reemplazar el directorio predeterminado del registro de Azúcar. <br> </ li>
                                  <li> [Opcional] <b> ID de aplicación </ b> si desea anular el auto-generado
                                  ID que asegura que las sesiones de una instancia de azúcar no son utilizados por otras instancias. <br> </ Li>
                                  <li> <b> Juego de caracteres </ b> más utilizado en el entorno local. <br> </ li> </ ul>
                                  Para obtener información más detallada, por favor consulte la Guía de instalación.',
'LBL_WELCOME_PLEASE_READ_BELOW'                    => 'Por favor, lea la siguiente información importante antes de proceder con la instalación. La información le ayudará a determinar si usted está listo para instalar la aplicación en este momento.',
'LBL_WELCOME_CHOOSE_LANGUAGE'                      => '<b>Elija su idioma</b>',
'LBL_WELCOME_SETUP_WIZARD'                         => 'Asistente de configuración',
'LBL_WELCOME_TITLE_WELCOME'                        => 'Bienvenido al SugarCRM',
'LBL_WELCOME_TITLE'                                => 'Asistente de configuración SugarCRM',
'LBL_WIZARD_TITLE'                                 => 'Asistente de configuración Sugar: ',
'LBL_YES'                                          => 'Sí',
'LBL_YES_MULTI'                                    => 'Sí - Multibyte',
'LBL_OOTB_WORKFLOW'                                => 'Tareas de proceso de flujo de trabajo',
'LBL_OOTB_REPORTS'                                 => 'Ejecutar la generación de informes Tareas programadas',
'LBL_OOTB_IE'                                      => 'Compruebe buzones entrantes',
'LBL_OOTB_BOUNCE'                                  => 'Ejecutar proceso nocturno de devolución de mensajes de campaña',
'LBL_OOTB_CAMPAIGN'                                => 'Ejecutar campañas de email masivos nocturnos',
'LBL_OOTB_PRUNE'                                   => 'Comprimir base de datos en el 1 ° del mes',
'LBL_OOTB_TRACKER'                                 => 'Comprimir las tablas rastreador',
'LBL_OOTB_SEND_EMAIL_REMINDERS'                    => 'Ejecutar Notificaciones de recordatorio por correo electrónico ',
'LBL_UPDATE_TRACKER_SESSIONS'                      => 'Actualizar tabla tracker_sessions',
'LBL_OOTB_CLEANUP_QUEUE'                           => 'Limpiar cola de trabajos',
'LBL_PATCHES_TITLE'                                => 'Instale los parches más recientes',
'LBL_MODULE_TITLE'                                 => 'Instalar los paquetes de idioma',
'LBL_PATCH_1'                                      => 'Si desea omitir este paso, haga clic en Siguiente.',
'LBL_PATCH_TITLE'                                  => 'Parche del sistema',
'LBL_PATCH_READY'                                  => 'El siguiente parche(es) están listos para ser instalados:',
'LBL_SESSION_ERR_DESCRIPTION'                      => 'SugarCRM se basa en sesiones de PHP para almacenar información importante mientras está conectado a este servidor web. Su instalación de PHP no cuenta con la información de la sesión correctamente configurado.
<br><br> Una configuración errónea común es que "session.save_path &#039;el <b> </ b> directiva no apunta a un directorio válido. <br>
<br> Por favor, corrija su <a target=_new href=&#039;http://us2.php.net/manual/en/ref.session.php&#039;> configuración de PHP </ a> en el archivo php.ini ubicado aquí abajo .',
'LBL_SESSION_ERR_TITLE'                            => 'Error en la configuración de sessiones de PHP',
'LBL_SYSTEM_NAME'                                  => 'Nombre del sistema',
'LBL_COLLATION'                                    => 'Configuración de intercalación',
'LBL_REQUIRED_SYSTEM_NAME'                         => 'Proporcione un nombre de sistema para la instancia de Sugar.',
'LBL_PATCH_UPLOAD'                                 => 'Seleccione un archivo de revisión desde el equipo local',
'LBL_INCOMPATIBLE_PHP_VERSION'                     => 'Es necesaria la versión 5 o superior de PHP.',
'LBL_MINIMUM_PHP_VERSION'                          => 'La versión mínima de PHP es 5.1.0. Se recomienda usar la versión 5.2.x',
'LBL_YOUR_PHP_VERSION'                             => '(Su versión actual de PHP es',
'LBL_RECOMMENDED_PHP_VERSION'                      => 'Versión recomendada de PHP es  5.2.x)',
'LBL_BACKWARD_COMPATIBILITY_ON'                    => 'El modo de compatibilidad con versiones anteriores Php está encendido. Establecer zend.ze1_compatibility_mode en Off para seguir adelante',


'advanced_password_new_account_email' => array(
'subject'                                          => 'Nueva información de la cuenta',
'description'                                      => 'Esta plantilla se usa cuando el administrador del sistema envía una nueva contraseña de un usuario.',
'body'                                             => '<div> <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\"\"center\"\"\"> <tbody> <tr> <td <p> colspan=\"2\"> aquí está tu nombre de usuario y una contraseña temporal: </ p> Nombre de usuario <p>: $ contact_user_user_name </ p> Password: $ contact_user_user_hash </ p > <br> <p> $ config_site_url </ p>  <br> Después de iniciar sesión con la contraseña anterior, usted puede ser requerido para restablecer la contraseña a una de su propia elección. </ p> </ td > </ tr> <td colspan=\"2\"> </ td> </ tr> </ tbody> </ table> </ div>',
'txt_body'                                         => 'Aquí está tu nombre de usuario y contraseña temporal:
Nombre de usuario: $ contact_user_user_name
Contraseña: $ contact_user_user_hash

$ config_site_url

Después de iniciar sesión con la contraseña anterior, usted puede ser requerido para restablecer la contraseña a una de su propia elección.',
'name'                                             => 'Contraseña del correo electrónico generado por el sistema',
),


'advanced_password_forgot_password_email' => array(
'subject'                                          => 'Restablecer la contraseña de la cuenta',
'description'                                      => 'Esta plantilla se utiliza para enviar un usuario haga clic en un enlace para restablecer la contraseña de la cuenta del usuario.',
'body'                                             => '<div> <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\"\"center\"\"\"> <tbody> <tr> <td <p> colspan=\"2\"> Usted solicitó recientemente en $ contact_user_pwd_last_changed para poder restablecer la contraseña de la cuenta. </ p> Haga clic <p> en el siguiente enlace para restablecer la contraseña: </ p> $ contact_user_link_guid </ p> </ td> </ tr> <td colspan = \ "2 \" > </ td> </ tr> </ tbody> </ table> </ div>',
'txt_body'                                         => 'Usted solicitó recientemente en $ contact_user_pwd_last_changed para poder restablecer su contraseña de la cuenta.

Haga clic en el siguiente enlace para restablecer tu contraseña:

$ contact_user_link_guid',
'name'                                             => '¿Has olvidado tu contraseña de correo electrónico?',
),
);?>
