<?php

require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);


$dotenv->load();

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');


$db_info = <<<EOT
    Host: $db_host
    Database: $db_name 
    Database User: $db_user 
    Database Password: $db_password
EOT;

echo nl2br($db_info);

