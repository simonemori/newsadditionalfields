<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News additional fields',
	'description' => 'Additional fields for news to manage publications',
	'category' => 'be',
	'author' => 'Simone Mori',
	'author_email' => 'simone.mori@newtvision.com',
	'author_company' => 'NewtVision',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '',
			'fluid' => '',
			'typo3' => '6.2.12-7.9.99',
			'news' => '3.2.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);