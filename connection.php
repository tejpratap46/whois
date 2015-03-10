<?php
$user = "root";
$password = "";
$database = "whois";
$hostname = "localhost";


mysql_connect ( $hostname, $user, $password );
@mysql_select_db ( $database ) or die ( "Unable to select database" );
?>
