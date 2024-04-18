<?php
// define('SERVER_IP', '98.70.36.76');
// define('SERVER_PORT', '80');
define('SERVER_IP', '192.168.1.7');
define('SERVER_PORT', '7788');

define('MAX_THREADS', 32);

define('MYSQL_HOST', 'localhost');
define('MYSQL_DB', 'realtime');
define('MYSQL_PORT', '3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '1234');



try{
	$pdoConn = new PDO("mysql:host=".MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
	$pdoConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdoConn->exec("use ".MYSQL_DB.";");
}catch(PDOException $e){
	echo $e->getMessage();
}

?>
