<?php
$manifest = array( 
	'name' => 'Spanish (Spain) Language Pack',
  'description' => 'Spanish (Spain) Language Pack',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '1.4.1',
	'acceptable_sugar_flavors' => array ( 0 => "CE", 1 => "PRO", 2 => "CORP", 3 => "ENT", 4 => "ULT"),
	'author' => 'BTACTIC S.C.C.L. & Leonardo Barrientos C',
	'acceptable_sugar_versions' => array ( "exact_matches" => array (), "regex_matches" => array (	0 => "6.5.[0-9][a-z]?" ,
        	1 => "6.4.[0-9][a-z]?" ,
        	2 => "6.3.[0-9][a-z]?" ), ),
	'published_date' => '2015-05-12',
);

$installdefs = array(
	'id'=> 'es_es',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	  array('from'=> '<basepath>/include','to'=> 'include',),
	  array('from'=> '<basepath>/modules','to'=> 'modules'),
	  array('from'=> '<basepath>/install','to'=> 'install')
	)
);
?>
