<?php
/**
 * File untuk penanganan konfigurasi
 * Misanya environment, database
 */

/**
 * Value yang diperbolehkan:
 *		development
 *		testing
 *		production
 **/
define('ENVIRONMENT', 'development');

/**
 * Database configuration
 */
$CONFIG['mysql']['database'] = 'tubes1_wbd';
$CONFIG['mysql']['host'] = 'localhost';
$CONFIG['mysql']['username'] = 'root';
$CONFIG['mysql']['password'] = '';