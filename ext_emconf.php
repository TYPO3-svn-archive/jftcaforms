<?php

########################################################################
# Extension Manager/Repository config file for ext "jftcaforms".
#
# Auto generated 25-02-2011 20:01
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Additional TCA Forms',
	'description' => 'Provides additional TCA Forms for the backend. At this moment these forms are supported: Slider',
	'category' => 'be',
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '5.0.0-5.3.99',
			'typo3' => '4.3.0-4.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:12:"ext_icon.gif";s:4:"dd0d";s:17:"ext_localconf.php";s:4:"a0fd";s:14:"ext_tables.php";s:4:"a0fd";s:16:"locallang_db.xml";s:4:"958e";s:35:"lib/class.tx_jftcaforms_tceFunc.php";s:4:"71bc";}',
	'suggests' => array(
	),
);

?>