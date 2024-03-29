<!DOCTYPE html>
<html lang="en">
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

    <body>

        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                  <a class="nav-link" href="../index.php">Laundry Plans</a>
                </li>
              </ul>
            </div>
        </nav> -->


        <div class="container-fluid">
            <div class="row no-gutter">
                <div class=" d-none d-md-flex col-lg-5 bg-image1"></div>
                <div class="col-md-8 col-lg-7">
                    <nav class="navbar navbar-expand-lg mt-4">
                        <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
                            <ul class="navbar mr-auto">
                                <li class="nav-item mr-1">
                                    <a class="nav-link " href="../index.php"><i class="mr-2 fa fa-arrow-left" style="font-size: 14px"></i>Back</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="login d-flex align-items-center  py-5">
                        <div class="container mt-3">
                            <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto mb-5 pb-5">
                                    <h3 class="login-heading mb-5">Sign Up</h3>
                                <form method="post">
                                    <div class="form-label-group">
                                    </div>
                                    <div class="form-label-group my-4">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First name" value="" required autofocus>
                                        <label for="fname">First name</label>
                                    </div>

                                    <div class="form-label-group my-4">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" required>
                                        <label for="lname">Last name</label>
                                    </div>


                                    <div class="form-label-group my-4">
                                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Confirm Password" required>
                                        <span id="mobile_error" class ="form-error"></span>
                                        <label for="mobile">Mobile number</label>
                                    </div>

                                    <div class="form-label-group my-4">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value=""  required>
                                        <span id="email_error" class ="form-error"></span>
                                        <label for="email">Email address</label>
                                    </div>

                                    <div class="form-label-group my-4">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                        <span id="password_error" class ="form-error"></span>
                                        <label for="password">Password</label>
                                    </div>
                    
                                    <button class="btn btn-lg btn-primary btn-block btn-login font-weight-bold text-center offset-3 " name="submit" type="submit">Continue</button>
                                    <div class="text-center">
                                        <a class="small mr-5" href="login.php">Already have an account? Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>