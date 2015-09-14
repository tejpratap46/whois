<!DOCTYPE html>
<?php
error_reporting(0);
require ('connection.php');
if ($_POST['name'] && strlen($_POST['gender']) > 0 && $_POST['image']) {
  $up = mysql_query("UPDATE `faces` SET `name`='".$_POST['name']."',`gender`='".$_POST['gender']."',`image_url`='".$_POST['image']."' WHERE name='".$_GET['name']."'");
  if ($up) {
    header('Location: profile.php?name='.$_POST['name']);
  }
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Who is :: the best</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body class="jumbotron">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Who is</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="toppers.php">Toppers</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="faces.php">Faces</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="notification" hidden>Loading...</div>

    <div class="container marketing">
    <hr>
      <div class="row well">
        <?php
          $q = mysql_query("SELECT * FROM faces WHERE name='".$_GET['name']."'");
          $info = mysql_fetch_array($q);
          echo '<div class="col-md-4">
                  <img src="'.$info['image_url'].'" alt="">
                </div>
                <div>
                  <h1>'.$info['name'].'</h1>
                </div>';
        ?>
      </div>
      <hr>
      <div class="row thumbnail">
        <div class="col-md-6">
          <div class="row">
            <div class="row well">
              <form method="post">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Name Of</span>
                  <input name="name" type="text" class="form-control" placeholder="Name The Face" aria-describedby="basic-addon1" value="<?php echo $info['name'];?>" required>
                </div>
                <hr>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">For Gender</span>
                  <input name="gender" type="number" min="0" max="1" class="form-control" placeholder="'1' for male, '0' for female" aria-describedby="basic-addon1" value="<?php echo $info['gender'];?>" required>
                </div>
                <hr>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">For Gender</span>
                  <input name="image" type="text" class="form-control" placeholder="Image Url" aria-describedby="basic-addon1" value="<?php echo $info['image_url'];?>" required>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" style="width:100%;" value="Update Face" />
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="row">
              <div class="row well">
                <h1>Messages</h1>
                  <div class="input-group">
                    <span class="input-group-addon">Message</span>
                    <input type="text" class="form-control" placeholder="Message can be seen by everyone" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-addon btn btn-default" id="shoutButton">Shout</span>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <hr>
      <div class="row thumbnail shouts">
        <h3>Messages</h3>
        <?php
        $sh = mysql_query("SELECT shout FROM faces WHERE name='".$_GET['name']."'");
        $shouts = mysql_fetch_array($sh);
        $shouts_csv = explode(":shexpl:", $shouts['shout']);
        for ($i=0; $i < count($shouts_csv); $i++) { 
          if ($i > 0) {
            echo '<div class="well">
              <div class="page-header">'.$shouts_csv[$i].'</div>
            </div>';
          }
        }
        ?>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row thumbnail">
            <?php
            $face = mysql_query("SELECT * FROM faces WHERE name='".$_GET['name']."'");
            if ($face) {
              $info = mysql_fetch_array($face);
              $result = mysql_query("SHOW COLUMNS FROM faces");
              if (!$result) {
                  echo 'Could not run query: ' . mysql_error();
                  exit;
              }
              $i = 0;
              if (mysql_num_rows($result) > 0) {
                  while ($row = mysql_fetch_assoc($result)) {
                   if ($i>3) {
                      // echo $row['Field']." - > ".$info[$row['Field']];
                      if ($i % 2 == 0) { // for zig zag view looks cooler
                        echo '<div class="row featurette well">
                              <div class="col-md-4">
                                <img style="width: 100%; height: 100%;" class="featurette-image img-responsive" src="'.$info['image_url'].'" alt="">
                              </div>
                              <div class="col-md-8">
                                <h2 class="featurette-heading">'.$info['name'].'<span class="text-muted"> Has '.$info[$row['Field']]." Votes In ".$row['Field'].'</span></h2>
                                <a class="btn btn-primary" href="votes.php?cat='.$row['Field'].'">Vote Here</a>
                              </div>
                            </div>';
                      }else{
                        echo '<div class="row featurette well">
                            <div class="col-md-8">
                              <h2 class="featurette-heading">'.$info['name'].'<span class="text-muted"> Has '.$info[$row['Field']]." Votes In ".$row['Field'].'</span></h2>
                              <a class="btn btn-primary" href="votes.php?cat='.$row['Field'].'">Vote Here</a>
                            </div>
                            <div class="col-md-4">
                              <img style="width: 100%; height: 100%;" class="featurette-image img-responsive" src="'.$info['image_url'].'" alt="">
                            </div>
                          </div>';
                      }
                   }
                   $i++;
                  }
              }
            }
            ?>
          </div>
        </div>
      </div>
      

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 TPS Corp <a href="#">Contact</a><a href="#">Term</a></p>
      </footer>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).click(function(e) {
        $id = $(e.target).attr('id');
        if ($id == 'shoutButton') {
            $('.notification').stop().show();
            var name = getParameterByName('name');
            var $Messages = $(e.target).parent().find('.form-control').first().val();
            // $.post("ajax/shout.php",
            // {
            //     name: name,
            //     message: $Messages
            // },
            // function(data, status){
            //     $('.notification').stop().hide();
            // });
            $('.shouts').load('ajax/shout.php',{
            name: name, message: $Messages} ,
              function(){
              $('.notification').stop().hide();
            });
        }
      });

      function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }
    </script>
  </body>
</html>