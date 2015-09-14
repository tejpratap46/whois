<?php
error_reporting(0);
require '../connection.php';
$q = mysql_query("SELECT id,name,query FROM category ORDER BY created DESC");
$last = mysql_num_rows($q);
echo "<hr>";
for ($i=0; $i < $last; $i++) {
  $info = mysql_fetch_array($q);
  $f = mysql_query($info['query']." LIMIT 1");
  $finfo = mysql_fetch_array($f);
  if ($i % 2 == 0) { // for zig zag view looks cooler
    echo '<div class="row featurette well">
        <div class="col-md-8">
          <h2 class="featurette-heading">'.$finfo['name'].'<span class="text-muted"> Is Best In '.$info['name'].'</span></h2>
          <a class="btn btn-primary" href="votes.php?cat='.$info['id'].'">Vote Here</a>
        </div>
        <div class="col-md-4">
          <img style="width: 100%; height: 100%;" class="featurette-image img-responsive" src="'.$finfo['image_url'].'" alt="">
        </div>
      </div>';
  }else{
    echo '<div class="row featurette well">
        <div class="col-md-4">
          <img style="width: 100%; height: 100%;" class="featurette-image img-responsive" src="'.$finfo['image_url'].'" alt="">
        </div>
        <div class="col-md-8">
          <h2 class="featurette-heading">'.$finfo['name'].'<span class="text-muted"> Is Best In '.$info['name'].'</span></h2>
          <a class="btn btn-primary" href="votes.php?cat='.$info['id'].'">Vote Here</a>
        </div>
      </div>';
  }
  
}

?>