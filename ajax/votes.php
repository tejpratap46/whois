<?php
error_reporting(0);
require '../connection.php';
if ($_POST['cat']) {
  $cat = $_POST['cat'];
  $query = mysql_query("SELECT query,name FROM category WHERE id='".$cat."'") or die("<h1>No list for this category</h1>");
  mysql_query("UPDATE category SET views = views + 1 WHERE id='".$cat."'");
  $info = mysql_fetch_array($query);
  $q = mysql_query($info['query']);
  // $q = mysql_query("SELECT name,image_url FROM faces");
  echo '<hr>';
  echo '<div class="well"><h1>Vote for '.$info['name'].'</h1><a target="_blank" class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=brainstrom.zz.mu/whois/votes.php?cat='.$_POST['cat'].'">Share On Facebook</a></div>';
  echo '<hr>';
  for($i=0;$i<mysql_num_rows($q);$i++){
    $items = mysql_fetch_array($q);
    echo '<div class="row alert '.getAlertColor($i).'">
            <div class="col-md-1">
              <h1 style="width: 100%; text-align: center;">'.($i+1).'</h1>
            </div>
            <div class="col-md-2">
              <img style="width: 100%; text-align: center;" src="'.$items['image_url'].'" alt="">
            </div>
            <div style="text-align: center;" class="col-md-7">
              <a href="profile.php?name='.$items['name'].'"><h1>'.$items['name'].'</h1></a>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="'.$items[$cat].'" aria-valuemin="'.$items[$cat].'" aria-valuemax="100" style="width: '.$items[$cat].'%;">
                  '.$items[$cat].' votes
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-primary" style="width: 100%; height: 140px;" id="voteButton">Vote me</button>
            </div>
          </div>';
  }
}else{
  echo "<hr>";
  echo "<h1 class='well'>No list selected</h1>";
}

function getAlertColor($pos){
  $ret = "";
  if ($pos == 0) {
    $ret = "alert-success";
  }elseif ($pos < 10) {
    $ret = "alert-info";
  }elseif ($pos < 30) {
    $ret = "alert-warning";
  }else{
    $ret = "alert-danger";
  }
  return $ret;
}
?>