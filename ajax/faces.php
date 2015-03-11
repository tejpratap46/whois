<?php
require ('../connection.php');

$q = mysql_query("SELECT name,image_url FROM faces");
$last = mysql_num_rows($q);
if ($last == 0) {
	die("<h1>Its so lonely here, Add Somebody.</h1><a class='btn btn-primary' href='addface.php'></a>");
}
echo "<hr><h1 class='well'>All faces (".$last.")<a href='addface.php'>  [ <span class='glyphicon glyphicon-plus'></span>Add face]</a></h1>";
for ($i=0; $i < $last; $i++) {
	$info = mysql_fetch_array($q);
	if ($i % 3 == 0) {
			echo '<div class="row">';
	}
	echo '<div class="col-md-4 well">';
	echo '<a href="profile.php?name='.$info['name'].'">
			<div class="row center">
				<div class="col-md-4">
					<img src="'.$info['image_url'].'" alt="">
				</div>
				<div class="col-md-8">
					<h2>'.$info['name'].'</h2>
				</div>
			</div>
		</a>';
	echo '</div>';
	if ($i % 3 == 2) {
		echo '</div>';
	}
}
?>