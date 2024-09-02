<?php
$context = \TYPO3\CMS\Core\Core\Environment::getContext();

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

error_log('AdditionalConfiguration.php wurde geladen');

$GLOBALS["TYPO3_CONF_VARS"]["SYS"]["sitename"] .= " (" . string)$context . ")";
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress'] = 'noreply@gmail.com';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromName'] = 'test';

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'smtp.gmail.com:587';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_encrypt'] = 'tls'; // 'ssl' oder 'tls'
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_username'] = 'info@gmail.com';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_password'] = 'dein-smtp-passwort';