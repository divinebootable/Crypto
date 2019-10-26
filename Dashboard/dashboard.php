<?php
session_start();
$_SESSION['block'] = true;
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>CryptoCurrencyIconMiners</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="dashboard.php">CEIM</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      
      <!-- Navbar -->
    </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="">
            <span>Your Balance(BTC)<br>0.000000000+</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-money"></i>
            <span>Start Mining </span> 
          </a>
        </li>
         <li class="nav-item ">
          <a class="nav-link " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-qrcode"></i>
            <span>Add balance (Deposit)</span>
          </a>
          
        </li>

         <li class="nav-item ">
          <a class="nav-link " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-qrcode"></i>
            <span>Earn More (Referrals)</span>
          </a>
          
        </li>
         <li class="nav-item ">
          <a class="nav-link " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-money"></i>
            <span>Withdraw</span>
          </a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointments.php">
            <i class="fa fa-users"></i>

            <span>Help</span></a>
        </li>
         <li class="nav-item ">
          <a class="nav-link " href="forgot-password.php">
            <i class="fa fa-lock" aria-hidden="true"></i>
             <span>Security</span></a>
          
          
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="logout.php" >
            <i class="fas fa-door-open"></i>
            <span>Log out</span>
          </a>
          
        </li>
       
      
       
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><?php  echo  $_SESSION['user'];?></li>
            
          </ol>

          <!-- Icon Cards-->
          

          <section class="pricing-table  section" id="pricing" style="padding-top: 15px;">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="title text-center">
            <p>All plans are one-time payments(upfront fee) for the entire contract duration and are not based on a monthly subscription model</p>
          </div>
        </div>
      </div>
      <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="nav nav-pills mb-6 pricing-tab justify-content-center" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">BITCOIN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ETHEREUM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="pills-litecoin-tab" data-toggle="pill" href="#pills-litecoin" role="tab" aria-controls="pills-litecoin" aria-selected="false">LITECOIN</a>
                      </li>
                    </ul>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                  <!--bitcoin tab -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant Classic & Zero </h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Gold</h5>
                                        <h6 style="color: white">Starter</h6>
                                      
                                        <div class="price">
                                            <del style="color: white; font-size: 20px;">
                                               $1500
                                             </del><br>
                                            <span style="font-size: 40px;">$1000</span>
                                            <span class="sup">99</span>
                                        </div>
                                        <div>
                                           <h4> 1.5 TH/s</h4>
                                        </div>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p style="color: white;">18 months Bitcoin Mining<br> SHA-256 Mining Algorithm<br>Zero Maintenance Fee</p>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $395 weekly for 18 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant Classic & Zero </h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Platinum</h5>
                                        <h6 style="color: white">Best Buy</h6>
                                      
                                        <div class="price">
                                             <del style="color: white; font-size: 20px;">
                                               $3500
                                             </del><br>
                                            <span style="font-size: 40px">$3000</span>
                                            <span class="sup">99</span>
                                        </div>
                                        <div>
                                          <h4> 25 TH/s</h4>
                                        </div>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p style="color: white;">18 months Bitcoin Mining<br> SHA-256 Mining Algorithm<br>Zero Maintenance Fee</p>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $730 weekly for 18 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                       <div>
                                         <h6>Radiant Classic & Zero</h6>
                                       </div>
                                       <h5 class="display-5" style="color: #0E2E45">Diamond</h5>
                                        <h6 style="color: white">Professional</h6>
                                        <div class="price">
                                            <del style="color: white; font-size: 20px;">
                                               $5500
                                             </del><br>
                                            <span style="font-size: 40px;">$5000</span>
                                            <span class="sup">99</span>
                                        </div>
                                        <div>
                                          <h4> 44 TH/s</h4>
                                        </div>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                       <p style="color: white;">18 months Bitcoin Mining<br> SHA-256 Mining Algorithm<br>Zero Maintenance Fee</p>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $1960 weekly for 18 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                         <h6>Radiant Classic & Zero</h6>
                                       </div>
                                       <h5 class="display-5" style="color: #0E2E45">Custom plan</h5>
                                        <h6 style="color: white">Create a Custom Bitcoin Mining plan</h6>
                                        <div class="price">
                                             <del style="color: white; font-size: 20px;">
                                               $15000
                                             </del><br>
                                            <span style="font-size: 40px">$10000</span>
                                            <span class="sup">99</span>
                                        </div>
                                        <div>
                                          <h4> 64 TH/s</h4>
                                        </div>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p style="color: white;">Us Sliders or enter value Mining SHA-256 Mining Algorithm Zero maintenance fee</p>
                                        <a class="btn btn-main"  href="#">BUY NOW</a>
                                        <a class="btn btn-main" href="#">DETAILS</a>
                                        <br>
                                        <br>
                                       <p style="color: white;">Profit: $2490 weekly for 18 Months</p>
                                       <p style="color: #F6B142;">Profit: $1960 weekly for</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--ethereum -->

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div class="row">
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant  </h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Small</h5>
                                        <h6 style="color: white">Starter</h6>
                                      
                                        <div class="price">
                                            
                                            <span style="font-size: 40px;">$525</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                           <h4> 25 MH/s</h4>
                                        </div>
                                        <h6>2 Year Ethereum Mining Contract</h6>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4> Maintenance Fees apply</h4>
                                        
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $137 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant</h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Medium</h5>
                                        <h6 style="color: white">Best Buy</h6>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$1,500</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 75 MH/s</h4>
                                        </div>
                                        <h6>2 Year Ethereum Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> Maintenance Fees apply</h4>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $310 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant</h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Medium</h5>
                                        <h6 style="color: white">Best Buy</h6>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$6,650</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 350 MH/s</h4>
                                        </div>
                                        <h6>2 Year Ethereum Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> Maintenance Fees apply</h4>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $1022 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Radiant</h6>
                                      </div>
                                        <h5 class="display-5" style="color: #0E2E45">Medium</h5>
                                        <h6 style="color: white">Best Buy</h6>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$9,650</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 750 MH/s</h4>
                                        </div>
                                        <h6>2 Year Ethereum Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> Maintenance Fees apply</h4>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $1860 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                    </div>

                    <!-- litecoin-->

                       <div class="tab-pane fade" id="pills-litecoin" role="tabpanel" aria-labelledby="pills-litecoin-tab">
                      <div class="row">
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Gold  </h6>
                                      </div>
                              
                                        <h6 style="color: white">Starter</h6>
                                      
                                        <div class="price">
                                            
                                            <span style="font-size: 40px">$650</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                           <h4> 2 MH/s</h4>
                                        </div>
                                        <h6>2 Year Litecoin Mining Contract</h6>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4> No maintenance Fee </h4>
                                        
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $114 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Platinum</h6>
                                      </div>
                                        
                                        <h6 style="color: white">Best Buy</h6>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$1650</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 50 MH/s</h4>
                                        </div>
                                        <h6>2 Year Litecoin Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> No maintenance Fee</h4>
                                        <a class="btn btn-main" href="#">BUY</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $262.5 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Diamond</h6>
                                      </div>
                                        
                                        <h6 style="color: white">Professional</h6>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$2,400</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 200 MH/s</h4>
                                        </div>
                                        <h6>2 Year Litecoin Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> No maintenance Fee</h4>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $331 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="col" >
                                <div class="pricing-item">
                                    <h3>Back in stock(Limited Offer)</h3>
                                    <div class="pricing-body">
                                      <div>
                                        <h6>Custom plan</h6>
                                      </div>
                                        
                                        <p style="color: white">Create a custom plan</p>
                                      
                                        <div class="price">
                                             
                                            <span style="font-size: 40px;">$8600</span>
                                            <span class="sup">00</span>
                                        </div>
                                        <div>
                                          <h4> 900 MH/s</h4>
                                        </div>
                                        <h6>2 Year Litecoin Mining Contract</h6>
                                       
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar"style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                         
                                         <h4> No maintenance Fee</h4>
                                        <a class="btn btn-main" href="#">BUY NOW</a>
                                       <a class="btn btn-main" href="#">DETAILS</a>
                                       <br>
                                       <br>
                                       <p style="color: white;">Profit: $1380 weekly for 24 Months</p>
                                       <p style="color: #F6B142;">Profit: $395 weekly for 18 Months</p>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                    
                </div>
            </div>
           
           

        </div>    <!-- End container -->
  </section>    <!-- End section -->
    

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
