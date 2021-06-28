<!DOCTYPE html>
<html>
    <head>
        <title>Beranda</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <!-- Bootstrap css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylejumbo.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Bootstrap javascript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
            <div class="container">
                <h3><img src="images/logo.png" class="logo" type="text"></i></h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-0">
                      <h3>
                        <i class="fas fa-headphones-alt text-secondary"></i>
                      </h3>
                          <li class="nav-item active">
                            <a class="nav-link font-weight-bold text-danger"  href="beranda.html">MY MUSIC<span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="home.html">HOME<span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="about.html">ABOUT <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">LOGIN <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

      <div class="jumbotron">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <div class="kotak_login">
                    <form method="POST" action="cek_login.php">
                        <label>Please Log In</label>
                            <input type="text" name="username" class="form_login" placeholder="Username">
                            <input type="text" name="password" class="form_login" placeholder="Password">
                        <input type="submit" class="tombol_login" value="LOGIN">
                    </form>
              </div>
            </div>
        </div>
    </div>

    
  </body>
</html>