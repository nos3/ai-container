<?php

return array(
	'name' => 'ai-container',
	'depends' => array(
		'aimeos-core',
	),
	'include' => array(
		'lib/custom/src',
		'controller/extjs/src',
	),
	'config' => array(
	),
	'setup' => array(
	),
	'custom' => array(
		'controller/extjs' => array(
			'controller/extjs/src',
		),
	),
);
