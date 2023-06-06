<?php
// HTTP
define('HTTP_SERVER', 'http://brandkashmir.local/');

// HTTPS
define('HTTPS_SERVER', 'http://brandkashmir.local/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/nad/html2pdf/brandkashmir/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/nad/html2pdf/brandkashmir/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/nad/html2pdf/brandkashmir/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli_secure');
define('DB_HOSTNAME', 'aws.connect.psdb.cloud');
define('DB_USERNAME', 'cdyhdtut1h1tnv6r4lza');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'brandkashmir');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

define('DB_SSL',true);
define('DB_SSL_KEYFILE', 'key.pem');
define('DB_SSL_CERTFILE', 'cert.pem');
define('DB_SSL_CAFILE', 'ca-cert.pem');