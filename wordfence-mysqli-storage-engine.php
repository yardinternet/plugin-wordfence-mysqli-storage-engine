<?php

declare(strict_types=1);

/**
 * Plugin Name: Yard | Wordfence MySQLi Storage Engine
 * Plugin URI: https://github.com/yardinternet/plugin-wordfence-mysqli-storage-engin
 * Description: Enable MySQLi storage engine for Wordfence
 * Author: Yard | Digital Agency
 * Author URI: https://www.yard.nl
 * Version: 1.0.0
 * License: MIT License
 */
if (! defined('WPINC')) {
	exit;
}

//https://www.wordfence.com/help/firewall/mysqli-storage-engine/
define('WFWAF_STORAGE_ENGINE', 'mysqli');
define('WFWAF_DB_NAME', constant('DB_NAME'));
define('WFWAF_DB_USER', constant('DB_USER'));
define('WFWAF_DB_PASSWORD', constant('DB_PASSWORD'));
define('WFWAF_DB_HOST', constant('DB_HOST'));
define('WFWAF_DB_CHARSET', constant('DB_CHARSET'));
define('WFWAF_DB_COLLATE', constant('DB_COLLATE'));
define('WFWAF_TABLE_PREFIX', $table_prefix);
