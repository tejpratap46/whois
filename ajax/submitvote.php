<?php
require ('../connection.php');
if ($_POST['name'] && $_POST['cat']) {
	$name = $_POST['name'];
	$cat = $_POST['cat'];
	$i = mysql_query("SELECT ".$cat." FROM `faces` WHERE name='".$name."'");
	$in = mysql_fetch_array($i);
	$q = mysql_query("UPDATE `faces` SET ".$cat."='".($in[$cat] + 1)."' WHERE name='".$name."'");
	echo '<hr class="featurette-divider">
		<div class="well">
			<h1>You voted For '.$name.'<br />Thanks For Voting...<br />Check another category</h1>
		</div>';
}
?>