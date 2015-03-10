<?php
require 'connection.php';

if (($handle = fopen("data.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $q = mysql_query("INSERT INTO `faces`(`name`, `gender`, `image_url`, `hotness_votes`) VALUES ('$data[0]','$data[1]','','0')");
  }
  fclose($handle);
}
?>
