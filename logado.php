<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/starter-template/# -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../bootstrap-3.1.1/docs/assets/ico/favicon.ico">

    <title>Professional Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="#">Professional Profile</a>
          </div>
          <div class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" role="form">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) 
                    return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=490253211103355&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));</script>
                  </script>

                <div class="fb-login-button" data-max-rows="1" data-size="small" data-show-faces="false" data-auto-logout-link="true"></div>
                <div class="btn btn-primary btn-xs" role="button">Linked In &raquo;</div>
              </form>
            </div>
        </div>
    </div>
      <div class="container">
        <ul>
          <div class="row">
            <div class="col-md-4"><br><br></div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>
                <li>
                  Personal information <a class="btn btn-primary btn-xs" href="personalInformation.php">Edit</a>
                </li>
              </h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><br><br></div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>
                <li>
                  Education <a class="btn btn-primary btn-xs" href="education.php">Edit</a>
                </li>
              </h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><br><br></div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>
                <li>
                  Professional <a class="btn btn-primary btn-xs" href="professional.php">Edit</a>
                </li>
              </h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><br><br></div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>
                <li>
                  Projects <a class="btn btn-primary btn-xs" href="projects.php">Edit</a>
                </li>
              </h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
                </div>
              </div>
            </div>
          </div>
        </ul>
      </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>