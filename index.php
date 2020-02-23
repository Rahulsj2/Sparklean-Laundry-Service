<?php 
//include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rahul Srinivas">

        <title>Sparklean Laundry Services </title>


        <!-- Font Awesome Icons-->
        <link  rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.min.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Muli:300i,400,400i,600,700,800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS-->
        <link  rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        
        <!-- Main Style Sheet-->
        <Link rel="stylesheet" type="text/css" href="vendor/css/style.css">

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/js/app.js"></script>

    </head>

    <body style="background-image: url('img/Background Icons.svg');">


    <div class="">

        <section id="home" class="hero bg-image" style="height: 727px; background-image: url(img/woman.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
            <div class="overlay"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 88px; height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-1">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-1">
                      <a class="nav-link" href="#laundry-matters">Why Laundry Matters</a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="#how-it-works">How it Works</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="view/plans.php">Laundry Plans</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav mr-5">
                    <li class="nav-item mr-3"> 
                        <a class="nav-link sign-in" href="view/login.php">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-greenn my-sm-0 mr-5"  href="view/signup.php">Sign up</a>
                    </li>
                  </ul>
                </div>
            </nav>

			<div class="hero-text text-center">
				<div class="hero-text2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box text-center">
								<h2>"I wish I'd spent more time doing Laundry"</h2>
								<p>said no college student ever</p>
								<p><a href="view/plans.php" class="btn btn-green btn-lg btn-custom text-center">Start a Plan <i class="fa fa-arrow-circle-right ml-2 " style="font-size: 1.3rem;"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        


 
        <section class="my-5 py-5" id="laundry-matters">
            <div class="h-100 my-5">
                <div class="row butt h-100">
                    <div class="col-lg-5 back my-auto">     
                        <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 547px; height: 434px; border-radius: 0 30px 30px 0;">
                    </div>
                    <div class="col-lg-6 my-auto ml-4" >
                        <div class="ml-5 about">
                            <h1 class="mb-4 card-title">Why Choose Us </h1>
                            <p class="mb-4 pb-0">Lorem ipsum dolor sit amet, consetetur 
                                sadipscing elitr, sed diam nonumyeirmo tempor 
                                invidunt ut labore et dolormaga aliquyam erat, 
                                sed diam voluptua. At vero eos. Lorem diam 
                                nonumy eirmod tempor invidunt ut labore et 
                                dolore magna aliquyam erat, sed diam. Lorem 
                                diam nonumy eirmod tempor invidunt ut labore.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> 


        <div class="my-4 py-4" style="background-color: #A6CE39;">
            <div class="container ">
                <div class="container h-100">
                    <div class="row butt h-100 my-4 py-4">
                        <div class="col-lg-6 my-auto px-5">
                            <div class="mx-auto plan">
                                <h2 class="mb-2" style="font-size: 28px;">Ready to get started? </h2>
                                <p class="mb-4 pb-0">We're here to help. Start your laundry plan </p>
                            </div>
                        </div>

                        <div class="col-lg-6 my-auto px-5">     
                            <a  class="btn btn-light shadow start" href="view/plans.php">Start a Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


        <div class="mt-5 pt-5  text-center" id="how-it-works">
            <div class="container mt-4 pt-4">
                <div class="container h-100">
                    <div class="col-lg-12 px-5">
                        <div class="mx-auto about">
                            <h1 class="mb-2" style="font-size: 38px;">How It Works</h1>
                            <p class="laund">Laundry has never been made any easier </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


      
        <div class="container">
                <div class="col-lg-12">
                    <div class="prog-ress ml-5 pl-5">
                        <ul id="works" class="nav ml-5 pl-4">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-plan-tab" data-toggle="pill" href="#pills-plan" role="tab" aria-controls="pills-plan" aria-selected="true"><i class="fa fa-list-alt"></i></a> 
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="pills-pickup-tab" data-toggle="pill" href="#pills-pickup" role="tab" aria-controls="pills-pickup" aria-selected="false"><i class="fa fa-shopping-bag"></i></a>  
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mr-5" id="pills-fill-tab" data-toggle="pill" href="#pills-fill" role="tab" aria-controls="pills-fill" aria-selected="false"><i class="fa fa-tshirt"></i></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="pills-bring-tab" data-toggle="pill" href="#pills-bring"role="tab" aria-controls="pills-bring" aria-selected="false"><i class="fa fa-walking"></i></a>   
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="pills-track-tab" data-toggle="pill" href="#pills-track" role="tab" aria-controls="pills-track" aria-selected="false"><i class="fa fa-clock"></i></a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-delivery-tab" data-toggle="pill" href="#pills-delivery" role="tab" aria-controls="pills-delivery" aria-selected="false"><i class="fa fa-map-marker-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-plan" role="tabpanel" aria-labelledby="pills-plan-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">1</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Choose A Plan</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-pickup" role="tabpanel" aria-labelledby="pills-pickup-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">2</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Pick Up Your Bags</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fill" role="tabpanel" aria-labelledby="pills-fill-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">3</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Bring Us Your Bags</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-bring" role="tabpanel" aria-labelledby="pills-bring-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">4</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Fill Bags With Dirty Clothes</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-track" role="tabpanel" aria-labelledby="pills-track-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">5</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Track Your Laundry</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                <div class="container mb-5 pb-5">
                    <div class="row h-100">
                        <div class="col-lg-5">
                            <div class="row h-100">
                                <img src="img/basket.jpg" class="img-fluid" alt="" style="width: 494px; height: 345px; border-radius: 5px 5px 5px 5px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container mt-4">
        
                                <div class="ml-5 about">
                                    
                                    <p class="circle-icon mb-5">6</p>
                                    <h1 class="mb-4"  style="font-size: 16px; font-weight: 600;">Pickup Your Clean Clothes</h1>
                                    <p class="mb-4 pb-0" style="font-size: 17px; font-weight: 400;">Getting started is easy. Choose one of three plans available.</p>
                                    <ul class="" style="font-size: 16px; font-weight: 400;">
                                        <li class="desc">10 LB per week: Good as a linen service</li>
                                        <li class="desc">20 LB per week: Most popular plan</li>
                                        <li class="desc">30 LB per week: Heavy use; Good for athletes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 




        <hr>
        <div class="container text-center align-items-center">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-4">
                    <p class="mt-3" style=" font-weight: 600; font-size: 24px;">We're here to help.<br><span style=" font-weight: 400; font-size: 16px; color: #A5A5A5;">Real people. Real friendly.</span></p>
                </div>
                <div class="col-md-4">
                    <div class="contact mt-4">
                        <div class="row mt-3">
                            <div class="col-2">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="col-10 ">
                                <p class="text-cente mt-1" style="font-size: 12px; font-weight: 600;">CALL US AT (+233)123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <!-- <hr> -->


        <!-- Footer -->
        <footer class="page-footer font-small">
            <hr>
            <div class="container text-center text-md-left">
                <div class="row">

                    <div class="col-md-4 mx-auto mt-5">
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 88px; height: 60px;"></a>
                        <p class="dj font-weight-light">
                            Lorem ipsum dolor sit amet, consectetur adipiscing  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>

                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-3 mx-auto mt-5 foot">
                        <h6 class="font-weight-bold text-uppercase h6 mt-3 mb-4 footer-header">Site Map</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a class="font-weight-light" href="index.php">Home</a>
                            </li>
                            <li>
                                <a class="font-weight-light" href="#laundry-matters">Why Laundry Matters</a>
                            </li>
                            <li>
                                <a class="font-weight-light" href="view/plans.php">Laundry Plans</a>
                            </li>
                        </ul>
                    </div>
            
            
                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-3 mx-auto mt-5">
                        <h6 class="font-weight-bold text-uppercase h6 mt-3 mb-4 footer-header">Contact Us</h6>
                        <p class="dj font-weight-light">1 University Avenue Berekuso<br><span>Eastern Region, Ghana</span></p>

                        <ul class="list-inline ml-auto">
                            <li class="list-inline-item">
                                <a class="" href="#"> <i class="fab fa-facebook-f fa-2x "></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="" href="#"> <i class="fab fa-instagram fa-2x"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="" href="#"> <i class="fab fa-twitter fa-2x"></i></a>
                            </li>
                        </ul>

                    </div>
            
                </div>
            </div>
        
        </footer>
        <!-- Footer -->

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    </body>



</html>