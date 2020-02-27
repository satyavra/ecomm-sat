  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>

  <style>

    
  </style>
  <?php
  if ($this->session->flashdata('submit_error')) {
    ?>
    <hr>
    <div class="alert alert-danger text-center">
      <h4><span class="glyphicon glyphicon-alert"></span> <?= lang('finded_errors') ?></h4>
      <?php
      foreach ($this->session->flashdata('submit_error') as $error) {
        echo $error . '<br>';
      }
      ?>
    </div>
    <hr>
    <?php
  }

  ?>
  
  <div class="container " style="margin-top: 150px;">

   <div class="row">
     <div class="col-md-8  checkoutForm">
      
      <form id="form">
        <div class="list-group">

          <div class="list-group-item py-3" data-acc-step>
            <h5 class="mb-0" data-acc-title><span class="ml-0 ml-md-4 d-inline">Phone Number Verification</span></h5>

            <div data-acc-content class="ml-0 ml-md-5">
              <div class="my-3">
                <p class="text-muted ml-3">We need your phone number so that we can update you about your order.</p>
                <div class="form-group col-8">
                  <p class="d-inline-block">Your 10 digit mobile number</p>
                  <div class="form-inline d-flex justify-content-center" id="phoneinpt" >
  
  <div class="form-group ">
    <label for="phoneno" class="sr-only"></label>
    <input type="text" class="form-control" id="phoneno" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mt-2 ml-1 mb-2" id="Phonenext">Next</button>
</div>

                </div>

              </div>
            </div>
          </div>

          <div class="list-group-item py-3" data-acc-step>
            <h5 class="mb-0" data-acc-title><span class=" ml-0 ml-md-4">Delivery Address</span></h5>
            <div data-acc-content class="ml-5">
              <div class="my-3 deliveryAdd">
                <a href="" class=" ml-3 gcolor" data-toggle="modal" data-target="#model_1"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add a new Delivery Address</a>
                <div class="col-4 border mt-2 ml-3  addInput">
                  <p class="font-weight-bold" id="deliveryPlaceType"></p>
                  <p id="usrName"></p>
                  <p id="usrAddr"></p>
                  <p id="usrAddr2"></p>
                  <input type="hidden" id="hidfirst_name" value="">
                  <input type="hidden" id="hidemail" name="email" value="">
                  <input type="hidden" id="hidAddress" name="address" value="">
                  <input type="hidden" id="hidPhone" name="first_name" value="">


                  <button type="button" class="  addressbtn px-4  btn btn-warning ml-4 mb-3">Deliver Here</button>
                </div>

              </div>
            </div>
          </div>

          <!-- delivery-dateand time -->

          <div class="list-group-item py-3" data-acc-step>
            <h5 class="mb-0" data-acc-title><span class="ml-0 ml-md-4">Delivery Date & Time</span></h5>
            <div data-acc-content>
              <div class="my-3">
                <div class="p-0 p-md-5 border">
                  <nav class="bg-light datescroller">
                    <div class="nav nav-tabs nav-fill d-inline-flex flex-nowrap" id="nav-tab" role="tablist">
                      <?php
                                                      // Specify the start date. This date can be any English textual format  
                      $date_from = date("Y-M-d");  

  $date_from = strtotime($date_from); // Convert date to a UNIX timestamp  

  // Specify the end date. This date can be any English textual format  


  $date_to = strtotime("+7 day",$date_from); 
   // Convert date to a UNIX timestamp  

  // Loop from the start date to end date and output all dates inbetween  
  for ($i=$date_from; $i<=$date_to; $i+=86400) { 

    $date =  date("d", $i); 
    if(($date == date('d'))) {
      $date = 'Today';
      $day =  strtoupper(date("D", $i)); 
      $month ="";
    } 
    elseif($date == date("d", time() + 86400)) {
      $date = 'Tomorrow';
      $day = strtoupper(date("D", $i)); 
      $month ="";
    }
    else{   
      $day = strtoupper(date("D", $i));   
      $month = date('M');
    }
      // $month = ;
 

    echo '<a class="nav-item nav-link border rounded-0  font-weight-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-profile" aria-selected="false">'.$day.'<br><span><small>'.$date.'</small></span><span><small>'.$month.'</small></span></a>
    ';

  }  

  ?>
  </div>
  </nav>
  <div class="tab-content  border" id="nav-tabContent">
    <div class="tab-pane fade show active " id="nav-1" role="tabpanel" aria-labelledby="nav-home-tab">

      <ul class="list-group border-0">
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            6 AM - 9 AM
          </label>
        </div></li>
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            6 AM - 9 AM
          </label>
        </div></li>
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            6 AM - 9 AM
          </label>
        </div></li>
        <li class="list-group-item"><div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            6 AM - 9 AM
          </label>
        </div></li>
      </ul>


      <div class="d-flex justify-content-center mt-3">
        <button type="button" class="btn btn-danger btn-lg btn-block mx-4 mb-3">Place Order</button>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="list-group-item py-3" data-acc-step>
    <h5 class="mb-0" data-acc-title><span class="ml-0 ml-md-4">Payment</span></h5>
    <div data-acc-content>
      <div class="mt-3 p-0 px-md-5">
        <div class="border p-0 px-md-5 ">
          <div class="row p-0 pt-3 px-md-5 ">
            <div class="col-md-6 col-sm-2">
              <p class="text-muted pl-1">Total Amount</p>
            </div>
            <div class="col-md-6 col-sm-2 total">
              <p class=" float-right pr-1">&#8377;<?= $cartItems['finalSum'] ?></p>
            </div>
          </div>
          <div class="row px-5">
            <div class="col-md-6">
              <p class="text-muted delivery">Delivery Charges</p>
            </div>
            <div class="col-md-6">
              <p class="float-right text-danger   deliveryCharge ">Free</p>
            </div>
          </div>
          <hr>

          <div class="row px-5">
            <div class="col-md-6">
              <p class="font-weight-bold  delivery">Amount Payable</p> 
            </div>
            <div class="col-md-6">
              <p class=" float-right deliveryCharge">&#8377;<?= $cartItems['finalSum'] ?></p>
            </div>
          </div>


        </div>
        <div class="border mt-3">
          <div class="row ">
            <div class="col-md-1 ml-3 text-danger offerssec">
              <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <div class="col-md-10 ">
              <a href="" class="text-danger bankpromo">Promo code & Bank offers</a>
            </div>
            <span class="float-right text-danger bankpromoicon">></span>
          </div>

        </div>

        <div>
          <div class="row mt-5">
            <div class="col-xs-12 ">
              <nav class="bg-light ">
                <div class="nav nav-tabs nav-fill paymentOption" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cash</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Wallet</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Card</a>
                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">NetBanking</a>
                </div>
              </nav>
              <div class="tab-content py-3 px-3  border mt-2" id="nav-tabContent">
                <div class="tab-pane fade show active mt-3 p-0 p-md-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div  class="d-flex justify-content-center">
                    <i class="fa fa-money fa-5x mx-auto" aria-hidden="true"></i>

                  </div>
                  <div class="d-flex justify-content-center">
                    <p>Please pay<span class="font-weight-bold">₹<?= $cartItems['finalSum'] ?></span> to the delivery executive whe is delivered to you </p>

                  </div>
                  <div class="d-flex justify-content-center">
                    <p>--------------or---------------</p>

                  </div>
                  <div class="d-flex justify-content-center">
                    <p>Pay using <span class="font-weight-bold">Paytm/Mobikwik</span> at the time of delivery</p>

                  </div>
                  <div class="d-flex justify-content-center mt-3">
                    <a href="javascript:void(0);" onclick="document.getElementById('goOrder').submit();" class="btn btn-danger btn-lg btn-block">Place Order</a>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="row border-bottom">

                    <div class="col">

                      <input class="form-check-input ml-3" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    </div>
                    <div class="col">
                      <h3>AIRTEL money</h3>
                    </div>
                    <div class="col">
                      <p class="text-muted">MobiKwik
                      Up to Rs.200 Mobikwikxxxxxxxxxxx</p>
                    </div>

                  </div>
                  <div class="row border-bottom">

                    <div class="col">

                      <input class="form-check-input ml-3" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    </div>
                    <div class="col">
                      <h3>AIRTEL </h3>
                    </div>
                    <div class="col">
                      <p class="text-muted">MobiKwik
                      Up to Rs.200 Mobikwik</p>
                    </div>

                  </div>
                  <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-danger btn-lg btn-block">Pay Now</button>
                  </div>
                  <div class="d-flex justify-content-center mt-3"><p><small class="text-muted">You will be redirected to wallet’s website to authorize payment</small></p>
                  </div>
                </div>
                <div class="tab-pane fade p-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                  <div class="form-group">
                    <label for="cardNumber">Card number</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                      </div>
                      <input type="text" class="form-control" name="cardNumber" placeholder="">
                    </div> <!-- input-group.// -->
                  </div> <!-- form-group.// -->

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label><span class="hidden-xs">Expiration</span> </label>
                        <div class="form-inline">
                          <select class="form-control" style="width:45%">
                            <option>MM</option>
                            <option>01 - Janiary</option>
                            <option>02 - February</option>
                            <option>03 - February</option>
                          </select>
                          <select class="form-control" style="width:45%">
                            <option>YY</option>
                            <option>2018</option>
                            <option>2019</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                        <input class="form-control" required="" type="text">
                      </div> <!-- form-group.// -->
                    </div>
                  </div> <!-- row.// -->
                  <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                  <!-- card.// -->
                </div>

                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

                  <div class="px-5">
                    <label><span class="hidden-xs">Select Bank</span> </label>
                    <input list="browsers" class="form-control ">
                  </div>
                  <hr>
                  <datalist id="browsers">
                    <option value="Internet Explorer">
                      <option value="Firefox">
                        <option value="Chrome">
                          <option value="Opera">
                            <option value="Safari">
                            </datalist>

                            <div class="row d-flex justify-content-between px-5 mt-3">
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">


                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="paypalRadio" value="option1">
                                      <label class="form-check-label ml-0 font-weight-bold" for="inlineRadio1 ">PAYPAL
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Razorpay" value="option1">
                                      <label class="form-check-label ml-3" for="Razorpay"><h5>Razorpay</h5></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label ml-3" for="inlineRadio1"><h5>AXIS BANK</h5></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row d-flex justify-content-between px-5 mt-3">
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1"><h5>HDFC</h5></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                      <label class="form-check-label" for="inlineRadio2">SBII</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                      <label class="form-check-label" for="inlineRadio3">ICICI</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="px-5">
                              <button class="subscribe btn btn-primary btn-block mt-3" type="button" onclick="document.getElementById('goOrder').submit();"> Pay Now  </button>
                            </div>
                          </div>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- right side content -->

      <div class="col-md-4">
        <div class="card">
          <p class="pt-3"><span class="font-weight-bold pl-3 ">My Cart</span><span class="float-right pr-1"><span style="color:black;"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span> items</span></p>
          <hr>
            <div class="card-body m-0 p-0">
              <?php  
                if ($cartItems['array'] == 0) {
                  echo '<div class="text-danger text-center">no items in cart</div>';
                  }else{
                     foreach ($cartItems['array'] as $item) { ?>
               <div class=" d-flex flex-row py-2">
                 <div class="col-3 p-1">
                  <img src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" class="img-fluid" alt="">

                </div>
                <div class="col-9 font-size">
                 <span class="badge badge-primary">25% OFF</span>
                 
                <p class="py-0 my-0 hide"><?= $item['title'] ?></p>
                <p class="text-muted pt-0 my-0">1l</p>
                <span class="qty">
                 
                 <input type="number" class="input-cart" name="qty" value='<?= $item['num_added'] ?>' >
                 
               </span>
               <span class="pl-1">x ₹<span><?= strtok($item['price'],".")?></span>
               <span class="float-right"><span class="font-weight-bold"> ₹<span><?=strtok($item['sum_price'],"."); ?></span></span></span>

             </div>
           </div>

         <?php } 

                  }

              ?>
              
       </div>
       <hr>
  </div>
  <div class="card mt-2">
      <div class="row">

        <div class="col-md-4">
          <img src="images/food334.png">
        </div>
        <div class="col-md-5">
          <p><small>You wontit cheaper </small></p>

        </div>
      </div>
    </div>

  </div>
  </div>
  </div>
  </div>


  <!-- -------------------- -->

  <div class="container" id="checkout-page">
    <?php
    if ($cartItems['array'] != null) {
      ?>

      <div class="row" style="">
        <div class="col-sm-9 left-side">
          <form method="POST" id="goOrder">


            <div class="payment-type-box">
              <select class=" payment-type" data-style="btn-blue" name="payment_type" id="paymentOption">
                <?php if ($cashondelivery_visibility == 1) { ?>
                  <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> </option>
                <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                  <option value="PayPal"><?= lang('paypal') ?> </option>
                <?php } if ($bank_account['iban'] != null) { ?>
                  <option value="Bank"><?= lang('bank_payment') ?> </option>
                <?php } ?>
                <option value="Razorpay">Razorpay</option>
              </select>
              <span class="top-header text-center"><?= lang('choose_payment') ?></span>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="firstNameInput"><?= lang('first_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <input id="firstNameInput" class="form-control" name="first_name" value="<?= @$_POST['first_name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="lastNameInput"><?= lang('last_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <input id="lastNameInput" class="form-control" name="last_name" value="<?= @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="emailAddressInput"><?= lang('email_address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <input id="emailAddressInput" class="form-control" name="email" value="<?= @$_POST['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="phoneInput"><?= lang('phone') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <input id="phoneInput" class="form-control" name="phone" value="<?= @$_POST['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">
              </div>
              <div class="form-group col-sm-12">
                <label for="addressInput"><?= lang('address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <textarea id="addressInput" name="address" class="form-control" rows="3"><?= @$_POST['address'] ?></textarea>
              </div>
              <div class="form-group col-sm-6">
                <label for="cityInput"><?= lang('city') ?> (<sup><?= lang('requires') ?></sup>)</label>
                <input id="cityInput" class="form-control" name="city" value="<?= @$_POST['city'] ?>" type="text" placeholder="<?= lang('city') ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="postInput"><?= lang('post_code') ?></label>
                <input id="postInput" class="form-control" name="post_code" value="<?= @$_POST['post_code'] ?>" type="text" placeholder="<?= lang('post_code') ?>">
              </div>
              <div class="form-group col-sm-12">
                <label for="notesInput"><?= lang('notes') ?></label>
                <textarea id="notesInput" class="form-control" name="notes" rows="3"><?= @$_POST['notes'] ?></textarea>
              </div>
            </div> 

            <?php foreach ($cartItems['array'] as $item) { ?>
              <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
              <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>"> 
            <?php } ?>

            <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
            <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
            <input type="hidden" name="discountAmount" value="">



          </form>
          <div>
            <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
              <span class="glyphicon glyphicon-circle-arrow-left"></span>
              <?= lang('back_to_shop') ?>
            </a>
            <a href="javascript:void(0);" class="btn btn-primary go-order" onclick="document.getElementById('goOrder').submit();" class="pull-left">
              <?= lang('custom_order') ?> 
              <span class="glyphicon glyphicon-circle-arrow-right"></span>
            </a>
            <div class="clearfix"></div>
          </div>
        </div>

      </div>
    </div>
  <?php } else { ?>
    <div class="alert alert-info"><?= lang('no_products_in_cart') ?></div>
    <?php
  }
  if ($this->session->flashdata('deleted')) {
    ?>
    <script>
      $(document).ready(function () {
        ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
      });
    </script>
  <?php } if ($codeDiscounts == 1 && isset($_POST['discountCode'])) { ?>
    <script>
      $(document).ready(function () {
        checkDiscountCode();
      });
    </script>
  <?php } ?>

  <!-- Modal -->
  <div class="modal fade " id="model_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body p-0 bg-light">
          <form name="modelForm">
            <section class="bg-white">
              <h5 class="text-center pt-3">Add New Delivery Address</h5>
              <p class="text-center text-muted text"><small>Please enter the accurate address, it will help us to serve you better</small></p>

              <div class="form-group px-3 pb-3 ">
                <label for=""><small class="text-muted">Area/Locality</small><small class="text-danger">*</small></label>
                <div class="input-group ">
                  <input type="text" id="loc_form" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="name@example.com">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary ml-2 gcolor" type="button" id="button-addon2" onclick="checkCookie();"><i class="fa fa-location-arrow "></i> &nbsp;&nbsp;Detect</button>
                  </div>
                </div>
              </div>
            </section>
            <section class="px-3">
              <label for=""><small class="text-muted">Name</small><small class="text-danger">*</small></label>
              <div class="input-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <select class="custom-select" id="inputGroupSelect" aria-label="Example select with button addon">
                      <option  selected disabled>Choose...</option>
                      <option value="1">Mr</option>
                      <option value="2">Mrs</option>
                      <option value="3">Miss</option>
                    </select>
                  </div>
                  <input type="text" id="nameInput" name="fname"  type="text" placeholder=""placeholder="First & Last Name">
                </div>

              </div>
              <label class="mt-2" for=""><small class="text-muted">Flat / House / Office No.</small><small class="text-danger">*</small></label>

              <input type="text" textarea id="addressInput" name="address" class="form-control">
              <label>Email<small class="text-danger">*</small></label>
              <input type="email" class="form-control" name="email" id="emailInput" aria-describedby="emailHelp">
              <label class="mt-2" for=""><small class="text-muted">Street / Society / Office Name</small><small class="text-danger">*</small></label>
              <input type="text" id="addressInput2" name="address2" class="form-control">

              <div class="form-check form-check-inline mt-4">
                <input class="form-check-input px-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Home</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input px-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Office</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input px-2" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                <label class="form-check-label" for="inlineRadio3">Other</label>
              </div>

            </section>
            <button type="button" class=" px-3 btn btn-warning mt-3 ml-3 mb-4" onclick="validateForm();">Continue</button>
            <button type="button" class=" px-4 btn btn-primary  mt-3 ml-3 mb-4">Cancel</button >
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>


