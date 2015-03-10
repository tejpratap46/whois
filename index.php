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

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <img src="img/cat.png" alt=""> -->
              <h1><strong>Categories</strong></h1>
              <p>All Categories Here.</p>
              <p><a class="btn btn-lg btn-primary" href="category.php" role="button">View All</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <img src="img/add-user.png" alt=""> -->
              <h1><strong>Add Somebody</strong></h1>
              <p>Somebody is missing! Add them from here.</p>
              <p><a class="btn btn-lg btn-primary" href="addface.php" role="button">Add People</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <img src="img/add.png" alt=""> -->
              <h1><strong>Add Category</strong></h1>
              <p>Add a new category.</p>
              <p><a class="btn btn-lg btn-primary" href="addcategory.php" role="button">Add new Category</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <div class="row well">
      <h1>Some Categories</h1>
    </div>
      <!-- Three columns of text below the carousel -->
      <div class="row">
      <?php // php for getting 3 categories for home page
      require ('connection.php');
      $q = mysql_query("SELECT id,name FROM category");
      $last = mysql_num_rows($q);
      $last = min($last,3);
      if ($last == 0) {
        die("No categories available, You can add one too.</h1><a class='btn btn-primary' href='addcategory.php'></a>");
      }
      // echo "<hr><h1 class='well'>All categories (".$last.")<a href='addcategory.php'>  [ <span class='glyphicon glyphicon-plus'></span>Add Category]</a></h1>";
      echo '<div class="row">';
      for ($i=0; $i < $last; $i++) {
        $info = mysql_fetch_array($q);
        echo '<div class="col-md-4 well">';
        echo '<a href="votes.php?cat='.$info['id'].'"><div class="row center"><div class="col-md-4"><h1>'.($i+1).'</h1></div><div class="col-md-8"><h2>'.$info['name'].'</h2></div></div></a>';
        echo '</div>';
      }
      echo '</div>';
      ?>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <?php
      $q = mysql_query("SELECT id,name,query FROM category");
      $last = mysql_num_rows($q);
      $last = min($last,3);
      for ($i=0; $i < $last; $i++) {
        $info = mysql_fetch_array($q);
        $f = mysql_query($info['query']." LIMIT 1");
        $finfo = mysql_fetch_array($f);
        echo '<div class="row featurette well">
              <div class="col-md-7">
                <h2 class="featurette-heading">'.$finfo['name'].'<span class="text-muted"> Is Best In '.$info['name'].'</span></h2>
                <a class="btn btn-primary" href="votes.php?cat='.$info['id'].'">Vote Here</a>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-responsive" src="" alt="">
              </div>
            </div>';
      }
      
      ?>

      <!-- /END THE FEATURETTES -->


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
