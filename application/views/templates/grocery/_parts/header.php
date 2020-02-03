<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" /> 
 <meta name="description" content="<?= $description ?>" />
 <meta name="keywords" content="<?= $keywords ?>" />
 <meta property="og:title" content="<?= $title ?>" />
 <meta property="og:description" content="<?= $description ?>" />
 <meta property="og:url" content="<?= LANG_URL ?>" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="<?= base_url('assets/img/site-overview.png') ?>" />
 <title><?= $title ?></title>

 <!-- css files -->

 <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
 <link rel="stylesheet" href="<?= base_url('assets/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>" />
 <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
 <link href="<?= base_url('templatecss/style.css') ?>" rel="stylesheet" />
 <link href="<?= base_url('cssloader/theme.css') ?>" rel="stylesheet" />
 <link rel="stylesheet" href="<?= base_url('assets/slick/slick.css') ?>" />
 <link rel="stylesheet" href="<?= base_url('assets/slick/slick-theme.css') ?>" />
 <link href="<?= base_url('templatecss/style-zaman.css') ?>" rel="stylesheet" />
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>
<body>
 
  <div  id="loader" class=" card bg-light shadow-sm"style="position:fixed; display:none; z-index: 88888888888;
  top: 79px;
  z-index: 88888888888;
  left: 90px;
  
  
  padding-left: 100px;
  padding-right: 100px;">
  <div class="arrow-up" style="
  width: 0; 
  height: 0; 
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  
  border-bottom: 10px solid white;
  position: absolute;
  top: -10px;
  "></div>
  
  <img class="" src="http://localhost/Grofers-clone/ecomm-sat/assets/imgs/index.messenger-typing-preloader.svg" alt="Loding" >
  <h6 class="text-muted mb-5">Preparing experiences for you</h6>
</div>
<!-- my nav bar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 navbarmain fixed-top">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <a class="navbar-brand text-warning" href="<?= base_url() ?>" >LOGO</a></div>
   <div class="col-sm-1 smallnavigation">
    <span class="smallnav menu" onclick="openNav()">☰</span>
  </div>
  <ul class="navbar-nav mr-auto location ">
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle text-white" href="#" id="LocationSelect" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-map-marker"></i>
      location
    </a>

    <div id="locationSelect" class="dropdown-menu locationDropdown ">
      <h6 class="dropdown-header mx-5 text-center">Where do you want the delivery?</h6>
      <div class="border mx-2 py-2"> 
       <i class="fa fa-location-arrow fa-2x pl-3 pt-0" ></i>
       <span>Deliver in <b>New Delhi</b></span>
       <i class="fa fa-angle-right fa-2x float-right text-danger pr-3"></i>
     </div>
     <div class="bg-light mt-3 dropdown-item pt-3" style="padding-left: 50px;
     padding-right: 50px;">
     <h5 class="dropdown-header mx-5 text-dark">-------Or Select your city-------</h5>
     <h6 class="dropdown-header mx-5 text-dark mt-3 text-center">Top Searched Cities</h6>
     <div class="row d-flex justify-content-between mt-4">
       <div class="col-md-2 ">
        <figure class="figure">
         <i class="fa fa-globe fa-2x"></i>
         <figcaption class="figure-caption pt-2">Mumbai</figcaption>
       </figure>
     </div>
     <div class="col-md-2 ">
      <figure class="figure">
       <i class="fa fa-globe fa-2x"></i>
       <figcaption class="figure-caption pt-2">Delhi</figcaption>
     </figure>
   </div>
   <div class="col-md-2 ">
    <figure class="figure">
     <i class="fa fa-globe fa-2x"></i>
     <figcaption class="figure-caption pt-2">Pune</figcaption>
   </figure>
 </div>
 <div class="col-md-2 ">
  <figure class="figure">
   <i class="fa fa-globe fa-2x"></i>
   <figcaption class="figure-caption pt-2">Banglore</figcaption>
 </figure>
</div>
<div class="col-md-2 ">
  <figure class="figure">
   <i class="fa fa-globe fa-2x"></i>
   <figcaption class="figure-caption pt-2">Mumbai</figcaption>
 </figure>
</div>
</div>

<form>
 <div class="input-group">
  <div class="input-group-prepend ">
   <p class="input-group-text bg-white border-right-0" id="inputGroup-sizing-default"><i class="fa fa-search"></i> &nbsp;<span style="font-size: 10px;" class="text-muted"></span></p>
 </div>
 
 <input class="form-control border-left-0 border-right-0" type="text" id="selectCity" list="places" placeholder="Type your city">

 <datalist id="places">
  <option value="Delhi">
    <option value="Mumbai">
      <option value="Patna">
        <option value="Banglore">
          <option value="Chennai">
            <option value="Noida">
            </datalist> 

            <div class="input-group-append">
             <button class="btn btn-outline-secondary " type="button" id="button-addon2" onclick="gifLoader(), checkCookie();"><i class="fa fa-location-arrow "></i> &nbsp;&nbsp;Detect</button>
           </div>
         </div>
       </form>
     </div>

   </div>

 </li>
</ul>
<div class="input-group d-flex justify-content-center searchbar">
 <div class="input-group-append d-lg-none mr-2 border-0 border border-warning">
  <span class="input-group-text bg-white p-1 border-0 rounded"><a href="#">Categories</a></span>
</div>
<input class="form-control col-md-9 col-sm-2 rounded" type="text" placeholder="Search for items..." aria-label="Search">
</div>
<div class="collapse navbar-collapse mr-2" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown mr-5">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account<br>
        <span  style=" position:relative;position: relative;
        top: -3px; font-size: 0.7rem !important;">Login/Sign Up</span>
      </a>
      <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="    position: absolute;left: -194px;top:70px;width: 276px; "><div>

        <!-- Button trigger modal -->
        <button type="button" class="text-center ml-5 btn btn-danger pl-4 pr-4"id="dialog-next" data-toggle="modal" data-target="#exampleModal">
          Login or Signup
        </button>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;FAQs</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;Offers</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;Recipies</a>
      </div>
    </div>
  </li>
</ul>
</div>
<a href="<?=base_url('shopping-cart')?>" style="text-decoration: none;">

 <i class="fa fa-shopping-cart d-inline text-white fa-lg" data-toggle="modal" data-target="#exampleModal"></i><span class="pl-1" style="color:white;"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span>
</a>

<div id="mySidenav" class="sidenav">
  <div class="container "style="background-color: #FFE298;">
   <div class="row">
    <div class="col-1">
     <i class="fa fa-user-secret py-4"></i>
   </div>
   <div class="col-9 mt-2">
     <span class="text-primary font-weight-normal "style="font-size: 16px;">smart bachat club</span><br><span style="font-size: 12px;">Exclusive Wholesale price</span>
   </div>
   <div class="col-1 ml-0 py-4 closenav" style="background-color: #FFD25D;">
     <a href="javascript:void(0)"   onclick="closeNav()" class="text-muted"><i class="fa fa-angle-right fa-sm"></i></a>
   </div>
 </div>
</div>
<p class="sideLinks bg-light text-dark" style="font-size: 14px;">Welcome</p>

<div class="list-group">
 <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>&nbsp;&nbsp; Login</a>
 <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; My Addresses</a>
 <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-list-alt"></i>&nbsp;&nbsp; My Orders</a>
 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; My Cart</a>


 <a href="#" class="list-group-item list-group-item-action " tabindex="-1" aria-disabled="true"><i class="fa fa-money"></i>&nbsp;&nbsp; My Wallet</a>

 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp; My Offers</a>

 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; My Cart</a>
 <p  class="ml-1" style="font-size: 12px;">Others</p>
 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i>&nbsp;&nbsp; FAQ</a></a>

 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i>&nbsp;&nbsp; About us</a>

 <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i>&nbsp;&nbsp;Terms and Conditions</a>

</div>
</div>

</nav>

<!-- my nav bar end -->
<!-- Modal -->
<div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-center">Phone No Verification</h5>
      </div>
      <div class=" bg-light pb-3">
        <p class="pt-5 text-center font-weight-normal">Enter your phone number to<br>
        Login/Sign up</p>
        <div class="col-7 mx-auto form-group">
          <div class=" input-group  mt-2">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile"></i></span>
            </div>
            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <button type="submit" id="dialog-ok" class="btn btn-primary  btn-block mt-3">Next</button>
        </div> 
      </div>
    </div>
  </div>
</div>

<div class="modal " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-center">Phone No Verification</h5>
      </div>
      <div class=" bg-light pb-3">
        <p class="pt-5 text-center font-weight-normal">Enter 4 code sent to your phone<br>

        +91-9865****89</p>
        <div class="col-7 mx-auto form-group">
          <div class=" input-group  mt-2">
            <div class="input-group-prepend">
              
          </div>
          <button type="submit"  class="btn btn-primary  btn-block mt-3">Next</button>
        </div> 
      </div>

      

    </div>
  </div>
</div>




<!-- <div id="dialog1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Modal Dialog 1</h4>

            </div>
            <div class="modal-body">This is the first modal dialog</div>
            <div class="modal-footer">
                <button type="button" id="dialog-ok" class="btn btn-default">Show dialog 2</button>
                <button type="button" id="dialog-close" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="dialog2" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Modal Dialog 2</h4>

            </div>
            <div class="modal-body">This is the second modal dialog</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="test" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div> -->





