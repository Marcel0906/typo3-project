<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ws_scss".
 *
 * Auto generated 01-08-2024 10:10
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'SASS compiler for TYPO3',
  'description' => 'Compiles scss files to CSS files.',
  'category' => 'fe',
  'version' => '12.0.5',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Sven Wappler',
  'author_email' => 'typo3YYYY@wappler.systems',
  'author_company' => 'WapplerSystems',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '8.0.0-8.2.99',
      'typo3' => '12.0.0-12.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

