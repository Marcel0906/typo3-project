<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "examples".
 *
 * Auto generated 17-07-2024 09:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Core Documentation Code Examples',
  'description' => 'This extension packages a number of code examples from the Core Documentation.',
  'category' => 'distribution',
  'version' => '13.0.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Documentation Team',
  'author_email' => 'documentation@typo3.org',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '13.0.0-13.4.99',
      'impexp' => '13.0.0-13.4.99',
      'fluid_styled_content' => '13.0.0-13.4.99',
      'linkvalidator' => '13.0.0-13.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

