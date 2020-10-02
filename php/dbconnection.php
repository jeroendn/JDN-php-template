<?php
require_once __DIR__ . '../../.config.php';

try {
	$conn = new PDO("mysql:host=" . constant("DB_SERVERNAME") . ";dbname=" . constant("DB_TABLE_NAME") . "",constant("DB_USERNAME"),constant("DB_PASSWORD"));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	if (SHOW_ERRORS) {
		  echo 'An error has occured: ' . $e->getMessage();
	}
}
