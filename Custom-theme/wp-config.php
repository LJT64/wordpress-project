<?php
define('DB_NAME', 'if0_37866046_wordpress_db');
define('DB_USER', 'if0_37866046');
define('DB_PASSWORD', 'f6sy8omBql');
define('DB_HOST', 'sql113.infinityfree.com');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
