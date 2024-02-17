<?php 

require 'vendor/autoload.php';

$SITE_URL = "my_project.loc";
$SYSTEM_NAME = "Chist";


$HOST_DB = 'localhost'; 
$USER_DB = 'root'; 
$PASS_DB = 'root'; 
$DB_NAME = 'cw31649_tracker'; 

use Medoo\Medoo;
 
$DATABASE = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => "localhost",
	'database' => "cw31649_tracker",
	'username' => "root",
	'password' => "root",
 
	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,
]);


?>