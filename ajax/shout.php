<?php 
error_reporting(0);
require '../connection.php';
if ($_POST['name'] && $_POST['message']) {
	$q = mysql_query("UPDATE faces SET shout = CONCAT(shout, ':shexpl: <small>At ".date('Y m d H m')."</small> <h1>\"".$_POST['message']."\"</h1>') WHERE name='".$_POST['name']."'") or die("Error ".mysql_error());
	$sh = mysql_query("SELECT shout FROM faces WHERE name='".$_POST['name']."'");
    $shouts = mysql_fetch_array($sh);
    $shouts_csv = explode(":shexpl:", $shouts['shout']);
    for ($i=0; $i < count($shouts_csv); $i++) {
		if ($i > 0) {
	      echo '<div class="well">
	        <div class="page-header">'.$shouts_csv[$i].'</div>
	      </div>';
		}
    }
}
?>