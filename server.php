<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 14/03/2016
 * Time: 10:22
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bccb84f33826f0');
define('DB_PASSWORD','7b0e4bef');
define('DB_DATABASE','Nonso1514414');

$DB = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$DB) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>