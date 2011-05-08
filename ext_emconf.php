<?php

########################################################################
# Extension Manager/Repository config file for ext "jftcaforms".
#
# Auto generated 08-05-2011 21:40
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
	'version' => '0.1.0',
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
	'_md5_values_when_last_written' => 'a:11:{s:12:"ext_icon.gif";s:4:"dd0d";s:17:"ext_localconf.php";s:4:"a0fd";s:14:"ext_tables.php";s:4:"a0fd";s:16:"locallang_db.xml";s:4:"958e";s:14:"doc/manual.sxw";s:4:"9929";s:35:"lib/class.tx_jftcaforms_tceFunc.php";s:4:"0c7e";s:23:"res/extjs/ux/Spinner.js";s:4:"e3c6";s:28:"res/extjs/ux/SpinnerField.js";s:4:"0c44";s:28:"res/extjs/ux/css/Spinner.css";s:4:"119e";s:37:"res/extjs/ux/images/spinner-split.gif";s:4:"d228";s:31:"res/extjs/ux/images/spinner.gif";s:4:"7732";}',
	'suggests' => array(
	),
);

?>