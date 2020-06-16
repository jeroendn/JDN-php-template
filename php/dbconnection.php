<?php
require_once __DIR__ . '../../.config.php';

$dbcon = false;

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUsername,$dbPassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$dbcon = true;
}
catch(PDOException $e) {
  // echo 'An error has occured: ' . $e->getMessage();
	$dbcon = false;
}
