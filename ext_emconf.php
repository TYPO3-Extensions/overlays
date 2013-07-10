<?php

/*********************************************************************
* Extension configuration file for ext "overlays".
*
* Generated by ext 20-06-2013 20:47 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Improved overlays',
  'description' => 'This extension provides an easy to use API for retrieving properly localized records. It also takes care of keeping the DB calls to a minimum.',
  'category' => 'fe',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'shy' => '',
  'dependencies' => '',
  'conflicts' => '',
  'priority' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'author_company' => '',
  'version' => '2.2.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '4.5.0-6.1.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"6aac";s:21:"class.tx_overlays.php";s:4:"192f";s:16:"ext_autoload.php";s:4:"ad6d";s:12:"ext_icon.gif";s:4:"73e0";s:10:"README.txt";s:4:"b729";s:14:"doc/manual.pdf";s:4:"f295";s:14:"doc/manual.sxw";s:4:"622c";}',
  'suggests' => 
  array (
  ),
  'comment' => 'Compatibility with TYPO3 6.0 and 6.1; added possibility to choose field to use as index of result array.',
  'user' => 'francois',
);

?>