<!DOCTYPE html>
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

        <nav class="navbar navbar-inverse navbar-static-top">
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="container marketing">
    <hr>
    <form method="post">
      <div class="well">
      <?php
      error_reporting(0);

      if ($_POST['name'] && strlen($_POST['gender']) > 0) {
        require ('connection.php');

        $name = strtolower(str_replace(" ", "", $_POST['name']));
        if ($_POST['gender'] == 0 || $_POST['gender'] == 1) {
          $query = "SELECT `name`, `image_url`, `".$name."` FROM `faces` WHERE gender=\'".$_POST['gender']."\' ORDER BY ".$name." DESC";
        }else{
          $query = "SELECT `name`, `image_url`, `".$name."` FROM `faces` ORDER BY ".$name." DESC";
        }
        $q = mysql_query("INSERT INTO category(id, name, query) VALUES ('".$name."','".$_POST['name']."','".$query."')") or die("<h1>Sorry, we having trubble ".mysql_error()."</h1>");
        if($q){
          $q1 = mysql_query("ALTER TABLE faces ADD ".$name." INT(2) NOT NULL DEFAULT 0") or die("<h1>Sorry, we having trubble ".mysql_error()."</h1>");
          echo "<h1>Ok we Added your category</h1>";
        }else{
          echo "<h1>Oops ... Something is wrong!</h1>";
        }
      }else{
        echo '<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Name This</span>
                <input name="name" type="text" class="form-control" placeholder="Name The Category" aria-describedby="basic-addon1" required>
              </div>
              <hr>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">For Gender</span>
                <input name="gender" type="number" min="0" max="2" class="form-control" placeholder="\'1\' for male, \'0\' for female Or \'2\' for both" aria-describedby="basic-addon1" required>
              </div>
              <hr>
              <input type="submit" class="btn btn-primary" style="width:100%;" value="Add Category" />';
      }
      ?>
      </div>
    </form>

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
  </body>
</html>