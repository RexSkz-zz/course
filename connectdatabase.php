<?php
	$db = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD);
	mysql_select_db($DB_NAME, $db);
	mysql_query("SET NAMES utf8");
?>
