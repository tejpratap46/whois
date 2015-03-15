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
                <li class="active"><a href="index.php">Home</a></li>
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

    <div class="notification">Loading...</div>
    <div class="container marketing">

    <div class="show-votes"><p>Your javascript is broken</p><a href="">Refresh</a></div>
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
    setTimeout(function(){
      var catid = getParameterByName('cat');
        var lists = localStorage.getItem("whoislocalstorage");
        $('.notification').stop().hide();
        if (lists == null) {
          localStorage.setItem("whoislocalstorage", "");
        }
        if (lists.indexOf(' ' + catid + ' ') >= 0){
          $('.show-votes').html('<hr class="featurette-divider"><div class="well"><h1>Your browser telling me that you already voted for this category.</h1></div>');
        }else{
          $('.notification').stop().show();
          $(".show-votes").load('ajax/votes.php',{
          cat: catid, param2: "value2"} ,
            function(){
            $('.notification').stop().hide();
          });
        }
      }, 30);
        
      
    $(document).click(function(e) {
      $id = $(e.target).attr('id');
      if ($id == 'voteButton') {
          $('.notification').stop().show();
          var catid = getParameterByName('cat');
          var lists = localStorage.getItem("whoislocalstorage");
          var $name = $(e.target).parent().parent().find('.col-md-7 h1').text();
          $(".show-votes").load('ajax/submitvote.php',{
          name: $name, cat: catid} ,
            function(){
            localStorage.setItem("whoislocalstorage", lists + " " + catid + " ");
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
