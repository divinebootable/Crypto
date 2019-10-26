<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
  echo 'active'; //class name in css 
 } 
}
?>







<section>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
           
          
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">Phone#:+1(469)213-0890 | </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">info@crytoexperticonminers.com</a>
            </li>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="united kingdom flag"></i>English</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-fr"> </span> English</a>
                                <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-it"> </span>  French</a>
                                <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ru"> </span>  Russian</a>
                            </div>
                        </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link loginn" href="login.php" target="_blank"><button style="padding: 3px 50px; color: white;" type="button" class="btn btn-outline-secondary">LOGIN</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php" target="_blank"><button style="padding: 3px 50px;" type="button" class="btn btn-warning ">SIGN UP</button></a>
            </li>
        </ul>
    </div>
</nav>
</section>

<section class="header-nav  navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item<?php active('index.php');?>">
            <a class="nav-link" href="index.php">HOME </a>
                            </li>
                            <li class="nav-item <?php active('aboutUs.php');?>">
                                <a class="nav-link" href="aboutUs.php" style="color: Black">ABOUT US</a>
                            </li>
                            <li class="nav-item <?php active('pricing.php');?>">
                                <a class="nav-link" href="pricing.php" style="color: black">PRICING</a>
                            </li>
                            <li class="nav-item <?php active('machines.php');?>">
                                <a class="nav-link" href="Shopping/index.php" style="color: black">MINING MACHINES</a>
                            </li>
                            <li class="nav-item <?php active('whymining.php');?>">
                                <a class="nav-link" href="whymining.php" style="color: black">WHY MINING</a>
                            </li>
                            <li class="nav-item <?php active('payouts.php');?>">
                                <a class="nav-link" href="payouts.php" style="color: black">PAYOUTS</a>
                            </li>
                            <li class="nav-item <?php active('faq.php');?>">
                                <a class="nav-link" href="faq.php" style="color: black">FQAs</a>
                            </li>
                            
                            <li class="nav-item <?php active('contact.php');?>">
                                <a class="nav-link" href="contact.php" style="color: black">Contact Us</a>
                            </li>
    </ul>
    
  </div>
</nav>
    <hr style="height:10px; margin: 0px;border:none;color:#F6B142;background-color:#F6B142;" />
</section>