<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rahul Srinivas">

        <title>Sparklean Laundry Services </title>


        <!-- Font Awesome Icons-->
        <link  rel="stylesheet" type="text/css" href="../vendor/fontawesome/css/all.min.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Muli:300i,400,400i,600,700,800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS-->
        <link  rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
        
        <!-- Main Style Sheet-->
        <Link rel="stylesheet" type="text/css" href="../vendor/css/style.css">

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/js/app.js"></script>

    </head>

    <body style="overflow-y: hidden;">

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" style="width: 88px; height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto links">
                <li class="nav-item mr-1">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item mr-1">
                  <a class="nav-link" href="../index.php">Why Laundry Matters</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link" href="../index.php">How it Works</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="plans.php">Laundry Plans</a>
                </li>
              </ul>
              <!-- <ul class="navbar-nav mr-5">
                <li class="nav-item mr-3"> 
                    <a class="nav-link sign-in" href="#">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-greenn plan-signup my-sm-0 mr-5" href="signup.php">Sign up</a>
                </li>
              </ul> -->
            </div>
        </nav>


        <div class="container-fluid">
            <div class="row">
                <div class=" d-none d-md-flex col-lg-5 bg-image2"></div>
                <div class="col-md-8 col-lg-7">
                    <div class="login d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto mb-5 pb-3">
                            <h3 class="login-heading mb-5">Sign in</h3>
                            <form method="post" class="all">
                                <div class="form-label-group">
                                </div>
                                <div class="form-label-group my-4">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value=""  required autofocus>
                                    <label for="email">Email address</label>
                                </div>

                                <div class="form-label-group my-4">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block btn-login font-weight-bold mb-3 text-center offset-3 mt-5" name="submit" type="submit">Continue</button>
                                <div class="text-center">
                                    <a class="small " href="reset.php">Forgot password?</a>
                                    <a class="small " href="signup.php">Don't have an account?</a>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        
<!-- 
        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> DER Medical Center</a>
            </div>
        </footer> -->
    </body>
</php>