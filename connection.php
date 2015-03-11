<?php
$user = "root";
$password = "";
$database = "whois";
$hostname = "localhost";

// $hostname = "mysql.hostinger.in";
//   $database = "u451933511_whois";
//   $user = "u451933511_whois";
//   $password = "9860637720";

mysql_connect ( $hostname, $user, $password );
@mysql_select_db ( $database ) or die ( "Unable to select database" );
?>
