<?php 
// include('header.php');
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


    <div class="">
        <!-----------------------
            NAVBAR
        ------------------------>
        <section id="" class="plan">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                </div>
            </nav>
        </section> 
        


        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-8 mx-auto mt-5">
                    <div class="card pay-card">
                        <div class="card-body pay-body">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                <li class="nav-item done">
                                    <a class="nav-link active payment" href="#contact" aria-controls="contact-details" role="tab"  data-toggle="pill"   aria-expanded="true">Contact &amp Details</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" role="tab"><i class="ml-2 fa fa-angle-right" style="color:#A5A5A5;"></i></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link payment" href="#address" aria-controls="delivery-address" role="tab" data-toggle="pill" aria-expanded="false"> Items Count</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" role="tab"><i class="ml-2 fa fa-angle-right" style="color:#A5A5A5;"></i></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link payment" href="#payment" aria-controls="payment-mode" role="tab" data-toggle="pill" aria-expanded="false">Payment Method &amp Details</a>
                                </li>
                              </ul>
                        </div>
                    </div>

                    <div class="card add-card mt-4">
                        <div class="card-body add-body">
                            <div class=" row ">
                                <div class="col-sm-5 col-md-6">Pickup Point</div>
                                <div class="col-sm-5  col-md-6 ">On campus, Hostel Lobby <a class="card-link ml-3" href="#" role="tab"> Change</a></div>
                              </div>
                        </div>
                    </div>



                    <div class="card pay-card mt-4">
                        <div class="card-body pay-body my-">
                              <div class="tab-content" id="pills-tabContent">
                                <div class="container tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="pills-customize-tab">
                                    <form class=" my-4">
                                        <div class="form-group">
                                            <label for="inputFname">Frist name</label>
                                            <input type="text" class="form-control" id="inputFname" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLname">Last name</label>
                                            <input type="text" class="form-control" id="inputLname" placeholder="">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input type="text" class="form-control" id="inputEmail" placeholder="">
                                        </div> -->
                                        <div class="form-group">
                                            <label for="inputDate">Pickup date</label>
                                            <input type="text" class="form-control" id="inputDate" placeholder="">
                                        </div>
                                        <a class="btn btn-primary continue white">Continue</a>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="pills-address-tab">
                                    <form class=" my-4">
                                        <div class="form-group">
                                            <label for="inputCard">Tops</label>
                                            <input type="number" class="form-control" id="inputTops" placeholder="Enter the number of tops">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCard">Bottoms</label>
                                            <input type="number" class="form-control" id="inputBottoms" placeholder="Enter the number of bottoms">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCard">Underwears</label>
                                            <input type="number" class="form-control" id="inputUndies" placeholder="Enter the number of underwears">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCard">Others</label>
                                            <input type="number" class="form-control" id="inputOther" placeholder="Enter any other items ">
                                        </div>
                                        <a class="btn btn-primary back white">Go Back</a>
                                        <a class="btn btn-primary continue white">Continue</a>
                                    </form>
                                </div>



                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                    <div class="row">
                
                                        <div class="col-md-6 mx-auto text-center">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check my-2">
                                                        <input class="form-check-input" name="payment" value="momo" type="radio" data-toggle="collapse" data-target="#momo" aria-expanded="false" aria-controls="#momo">
                                                        <input type="hidden" value="test" id='hiding_data'>
                                                        <label class="form-check-label" for="tab-momo">Mobile money</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check my-2">
                                                        <input class="form-check-input" name="payment" value="visa" type="radio" data-toggle="collapse" data-target="#visa" aria-expanded="false" aria-controls="#visa">
                                                        <label class="form-check-label" for="tab-visa">Visa</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>


                    <div class="collapse " id="momo">
                        <div class="card pay-card mt-4">
                            <div class="payment-header">
                                Mobile money
                            </div>
                            <div class="card-body pay-body my-4">
                                <div class="tab-content" id="pills-tabContent">
                                    <form>
                                        <div class="form-group">
                                            <label for="netOperator">Select operator </label>
                                            <select id="netOperator" class="form-control my-2">
                                                <option selected>Select an option</option>
                                                <option>MTN</option>
                                                <option>Vodafone</option>
                                                <option>AirtelTigo</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="">Phone number</label>
                                                <input type="text" class="form-control" id="" value="+233" disabled>
                                            </div>
                                            <div class="form-group col-md-8 mt-2">
                                                <input type="number" class="form-control mt-4" id="">
                                            </div>
                                        </div>
                                        <a class="btn btn-primary back white">Go Back</a>
                                        <a class="btn btn-primary continue white">Place Order</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                    <div class="collapse" id="visa">
                        <div class="card pay-card mt-4">
                            <div class="payment-header">
                                Credit / Debit card
                            </div>
                            <div class="card-body pay-body my-4">
                                <div class="tab-content" id="pills-tabContent">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputFirstName">First Name</label>
                                                <input type="text" class="form-control" id="inputFirstName" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputLastName">Last Name</label>
                                                <input type="text" class="form-control" id="inputLastName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCard">Card number</label>
                                            <input type="text" class="form-control" id="inputCard" placeholder="">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                                <label for="inputCard">Expiration Date</label>
                                                <input type="text" class="form-control" id="inputExpDate" placeholder="">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputCvv">CVV</label>
                                                <input type="text" class="form-control" id="inputCvv">
                                            </div>
                                        </div>
                                        <a class="btn btn-primary back white">Go Back</a>
                                        <a class="btn btn-primary continue white">Place Order</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        
                <div class="col-md-4 mx-auto mt-5">
                    <div class="container card pay-card">
                        <div class="payment-header my-3 text-center">
                            <h6>Order Summary</h6>
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-5 col-md-6 mb-2">Date</div>
                            <div class="col-sm-5  col-md-6 text-right">30 Jan 2020</div>
                            <div class="col-sm-5 col-md-6 mb-2">Time</div>
                            <div class="col-sm-5  col-md-6 text-right">02:42 PM</div>
                            <div class="col-sm-5 col-md-6 mb-2">Total no of items</div>
                            <div class="col-sm-5  col-md-6 text-right">23</div>
                        </div>

                        <hr class="dotted">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 mb-3"><h6>Items</h6></div>
                            <div class="col-sm-5 col-md-6 mb-2">Tops</div>
                            <div class="col-sm-5  col-md-6 text-right">5</div>
                            <div class="col-sm-5 col-md-6 mb-2">Bottoms</div>
                            <div class="col-sm-5  col-md-6 text-right">7</div>
                            <div class="col-sm-5 col-md-6 mb-2">Underwear</div>
                            <div class="col-sm-5  col-md-6 text-right">3</div>
                            <div class="col-sm-5 col-md-6 mb-2">Others</div>
                            <div class="col-sm-5  col-md-6 text-right">2</div>
                        </div>

                        <hr class="dotted">

                        <div class="row">
                            <div class="col-sm-5 col-md-6">Subtotal</div>
                            <div class="col-sm-5  col-md-6 text-right">5</div>
                            <div class="col-sm-12 col-md-12 mt-3" id="coup-coupon"> 
                                <div class="form-label-group">
                                    <input type="text" name="coupon" id="coupon" class="form-control" placeholder="Enter Coupon" value="">
                                    <label for="coupon">Enter coupon</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-2 mb-3">
                                <button  id="btn-coupon" class="btn btn-coupon">Add coupon</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-5 col-md-6 mb-2">Total amount</div>
                            <div class="col-sm-5  col-md-6 text-right">5</div>
                            <div class="col-sm-5 col-md-6 mb-2">Coupoun applied</div>
                            <div class="col-sm-5  col-md-6 text-right">2</div>
                            <div class="col-sm-5 col-md-6 mb-2">Amount to be paid</div>
                            <div class="col-sm-5  col-md-6 text-right">3</div>
                        </div>
                    </div>

                </div>
        
            </div>
        </div>





    

        <hr class="">
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
                        <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" style="width: 88px; height: 60px;"></a>
                        <p class="dj font-weight-light">
                            Lorem ipsum dolor sit amet, consectetur adipiscing  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>

                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-3 mx-auto mt-5 foot">
                        <h6 class="font-weight-bold text-uppercase h6 mt-3 mb-4 footer-header">Site Map</h6>
                        <ul class="list-unstyled">
                            <li>
                            <a class="font-weight-light" href="../index.php">Home</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="../index.php">Why Laundry Matters</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="plans.php">Laundry Plans</a>
                            </li>
                        </ul>
                    </div>
            
            
                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-3 mx-auto mt-5">
                        <h6 class="font-weight-bold text-uppercase h6 mt-3 mb-4 footer-header">Contact Us</h6>
                        <p class="dj font-weight-light">1 University Avenue Berekuso<br><span>Eastern Region, Ghana</span></p>

                        <ul class="list-inline ml-auto">
                            <li class="list-inline-item">
                                <a class="" href="#"> <i class="fab fa-facebook-f fa-2x"></i></a>
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
    <script src="../vendor/js/app.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    </body>



</html>