<?php
require ('../connection.php');
// $result = mysql_query("SHOW COLUMNS FROM faces");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $i = 0;
// if (mysql_num_rows($result) > 0) {
//     while ($row = mysql_fetch_assoc($result)) {
//     	if ($i>2) {
//     	echo "<hr>";
//         echo $row['Field'];
//     	}
//     	$i++;
//     }
// }
if ($_POST['order']) {
	$q = mysql_query("SELECT id,name FROM category ORDER BY ".$_POST['order']." DESC");
}else{
	$q = mysql_query("SELECT id,name FROM category");
}
$last = mysql_num_rows($q);
if ($last == 0) {
	die("<h1>No categories available, You can add one too.</h1><a class='btn btn-primary' href='addcategory.php'></a>");
}
echo "<hr><h1 class='well'>All categories (".$last.")<a href='addcategory.php'>  [ <span class='glyphicon glyphicon-plus'></span>Add Category]</a></h1>";
for ($i=0; $i < $last; $i++) {
	if ($i % 2 == 0) {
			echo '<div class="row">';
	}
	$info = mysql_fetch_array($q);
	echo '<div class="col-md-6 well">';
	echo '<a href="votes.php?cat='.$info['id'].'"><div class="row center"><div class="col-md-4"><h1>'.($i+1).'</h1></div><div class="col-md-8"><h2>'.$info['name'].'</h2></div></div></a>';
	echo '</div>';
	if ($i % 2 == 1) {
		echo '</div>';
	}
}
?>