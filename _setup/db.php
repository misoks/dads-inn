<?php
$db = mysql_connect("localhost","[USERNAME]", "[PASSWORD]") or die('Fail message');//change to your username/password to test on your machine
mysql_select_db("[DATABASE NAME]") or die("Fail message");//create itaps db and run createTables, loadData before using these php files
?>
