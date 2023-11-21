<style>

.topnav {
  overflow: hidden;
/*  background-color: #333;*/
  display: none;
  padding-bottom: 7px;

}

.float-right {
    float: right !important;
}


/*/////////////////////////////////////////////*/
.logo-anchor {
    display: none !important;
}

.header-upper-style3 .outer-box .header-upper-middle {
    position: relative;
    display: block;
    top: 30px;
    width: 60%;
    /* background: blue; */
    left: 5%;
}


.header-upper-style3 .outer-box .header-upper-right .button {
    position: relative;
    display: block;
    padding: 25px 0;
    text-align: right;
}
.header-upper-style3 .outer-box .header-upper-right {
    position: relative;
    display: block;
    width: 24%;
}
.header-upper-style3 .outer-box .header-upper-left .logo {
    position: relative;
    display: block;
    top: 17px;
}





/*/////////////////////////////////////////////////////*/



.topnav a {
     float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 8px 0px;
    text-decoration: none;
    font-size: 16px;
    width: 20%;
/*    background: red;*/


}
.topnav a:hover {
    background: #003b95;
    color: white;
}
.topnav a.active-link {
    background: #003b95;
    color: white;
}
.topnav a:hover {
/*  background-color: #ddd;*/
/*  color: black;*/

}

.topnav a.active {
/*  background-color: #04AA6D;*/
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 767px) {
  .topnav {
    display: block;
    position: fixed !important;
    z-index: 101;
    width: 100%;
    background: white;
    float: left;
    left: 0;
    box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
    -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
    -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
  }
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    margin-top: 8px;
    margin-right: 5px;
    font-size: 20px;
  }
 
}



@media screen and (max-width: 767px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-upper-style3 .outer-box .header-upper-left {
    display: none; 
  }
  .header-upper-style3 .outer-box .header-upper-middle {
    width: 100% !important;
    left: 0px;
  }
  .header-upper-style3 {
    padding: 0px;
  }
  .header-upper-style3 .outer-box .header-upper-middle {
    top: 0px !important;
  }
  .topnav a {
    width: auto !important;
    padding: 5px 15px 0px 15px !important;
    }
    .logo-anchor {
    display: block !important;
    }
    .logo-anchor:hover {
        background: none !important;
    }
    .topnav a.icon:hover {
        background: none !important;
        color: black;
    }
    .logo-anchor {
        text-align: left !important;
    }
    .logo-anchor img {  
        width: 60px !important;

    }
    div.responsive .logo-anchor img {

        margin-bottom: 10px;
    }

    
}

.myTopnav p{

    font-size: 12px !important

}


</style>


<!-- <section class="container header-bar">

  
    <div> -->
        
  <!-- <a href="#"> <p>   <strong>Address:</strong>  234 High St, Harlington, Hayes UB3 5DS</p> </a> -->

       <!-- <li> <strong>Address: </strong> <a href="https://maps.app.goo.gl/44W1kDxctfCtb4ej9">450 Bath Rd, Longford, West Drayton UB7 0EB, UK</a></li>
      
        
        
    </div>
    
    <div>
    <li> <strong>Email: </strong> <a href="emailto:info@airportfleet.co.uk">info@airportfleet.co.uk</a></li>
  
        
    </div>



</section> -->





<header class="main-header style3">
               
                <div class="header-upper-style3">
                    <div class="container clearfix">
                        <div class="outer-box clearfix">
                            <div class="header-upper-left float-left">
                                <div class="logo">
                                    <a title="<?= $companyName; ?>" href="<?= BASE_URL; ?>">
                                        <img  src="assets/images/fleet-logo2.png" title="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" alt="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" />
                                    </a>
                                </div>
                              </div>
                              
                              <div class="header-upper-middle clearfix float-left topnav" id="myTopnav">
                                
                              <div class ="business-address" >

                                 <!-- <p> <a href="https://maps.app.goo.gl/36rc4QcojBQn6d9h9">450 Bath Rd, Longford, West Drayton UB7 0EB, UK</a>  </p>
                                
                              </div>
                            -->

                                    <!-- <a href="<?= BASE_URL; ?>" class="active logo-anchor">
                                        <img src="assets/images/fleet-logo2.png" class=""  alt="<?= $companyName; ?> Logo" title="<?= $companyName; ?> Logo" width="160"  height="57" />
                                    </a>  -->

                                  <a title="Home Page - <?= $companyName; ?>" href="<?= BASE_URL; ?>" class="<?= $file == 'index.php' ? 'active-link' : '' ?>  dmUDNavigationItem_00 " > 
                                    Home
                                </a>
                                 <a title="About <?= $companyName; ?>" href="about-us.php" class="<?= $file == $about.'.php' ? 'active-link' : 'about-us.php' ?>  unifiednav__item  " >                    
                                    About Us
                                  </a>
                                  <a title="Areas We Cover in Londonn With Our Wheelchair Taxis - <?= $companyName; ?>" href="our-services.php" class="<?= $file == $areas.'.php' ? 'active-link' : '' ?> unifiednav__item  " >    Services
                                  </a>
                                  <a title="Airport Transfer Wheelchair Taxis in London <?= $area; ?> - <?= $companyName; ?>" href="airports.php" class="<?= $file == $airportPage.'.php' ? 'active-link' : '' ?> unifiednav__item  " > 
                                      Airports
                                    </a>

                                 
                                                 
                                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                    <i class="fa fa-bars"></i>
                                  </a>

                                  <a title="Contact Us - <?= $companyName; ?>"  href="contact-us.php" class="<?= $file == $contact.'.php' ? 'active-link' : '' ?> unifiednav__item  " >   
                                     Contact Us
                                    </a>
                                
                            </div>

                           

                             <div class="header-upper-right clearfix float-right">
                                <div class="button">
                                    <!-- <?php if($file === 'index.php') { ?>
                                    <strong id="booking-title">Book Your <?= $area; ?> Minicab </strong>
                                    <?php }  ?> -->
                                    

                                    <!-- <a class="btn-three hidden-booking-btn" title="Call us now to book <?= $area; ?> Taxi" href="<?= $bookingUrl ?>"><span class="icon-clock1"></span> <?= $phoneNo; ?> </a>

                                    <a class="btn-three hidden-booking-btn" title="Get quote for your <?= $area; ?> Taxi " href="<?= $bookingUrl ?>"><span class="fa fa-list"></span> Get Quote </a> -->

                                    <!-- <a class="btn-three" title="Book your <?= $area; ?> Taxi Online" href="<?= $bookingUrl ?>"><span class="fa fa-laptop"></span> Book Online</a> -->

                                </div>
                            </div>

                      



                          

                        </div>
                    </div>
                </div>


     <script>
    function myFunction() {

      var x = document.getElementById("myTopnav");
      // return false;
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>




                <!-- <div class="header-lower-style2">
                    <div class="container">
                        <div class="outer-box clearfix">
                            <div class="header-lawer-left float-left">
                                <div class="nav-outer clearfix">
                                    <nav class="main-menu style2 s3 dropdown-menus2 navbar-expand-lg">
                                        
                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">

                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Download Our Android App - <?= $companyName; ?>" href="<?= $androidAppUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-android"></i> Android App</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Download Our Iphone App - <?= $companyName; ?>" href="<?= $iphoneAppUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-apple"></i> iPhone App</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Get Free Quotation Online - <?= $companyName; ?>" href="<?= $bookingUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-list"></i> Get Quote</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Book Your <?= $area ?> Minicab Online - <?= $companyName; ?>" href="<?= $bookingUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-globe"></i>  Book Online</a>
                                                </li>



                                              


                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="menu-right-content-style3"></div>
                                </div>
                            </div>
                            <div class="header-lawer-right float-right">
                                <div class="phone-number-box">
                                    <div class="icon"><span class="icon-clock1"></span></div>
                                    <div class="text">
                                        <strong>Call Us On</strong>
                                        
                                        <a title="Call us on <?= $phoneNo; ?> to book your local <?= $area; ?> Taxi" href="tel:<?= $phoneNo; ?>">

                                            <strong style="color: black;"><?= $phoneNo; ?></strong>

                                        </a>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 -->

            </header>