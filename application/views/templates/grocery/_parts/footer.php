<!-- footer start -->
<footer class="mt-3  d-md-block d-none ">
  <div class="container-fluid">
    <div class="row footer-top">
      <div class="col-sm-4 text-center">
        <h4 class="ft-text-title">Media Name</h4>
        <h6 class="ft-desp">Company Name 
          <br>Country Name
        </h6>
        <h4 class="details">
          <a class="contact" href="tel:+977-1-4107223">
            <i class="fa fa-phone" aria-hidden="true"></i> +977-000000</a>
          </h4>
        </div>
        <div class="col-sm-4 text-center border-left">
          <h4 class="ft-text-title">Our Team</h4>
          <div class="address-member">
            <p class="member">
              <b>Director</b> : 
            </p>
            <p class="member">
              <b>Editor</b> : 
            </p>
            <p class="member">
              <b>Reporter</b> : 
            </p>
            <p class="member">
              <b>Reporter</b> : 
            </p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 text-center border-left">
          <h4 class="ft-text-title">About</h4>
          <div class="pspt-dtls">
            <a href="#" class="about">About</a>
            <a href="#" class="team">Team</a>
            <a href="#" class="advertise">Advertise</a>
            <br><br><br><br><br><br><br>
          </div>
        </div>
      </div>
      <div class="row ft-copyright pt-2 pb-2" style="padding-left: 25px;">
        <div class="col-sm-4 text-pp-crt">cpoyright 2018 All  Rights Reserved</div>
        <div class="col-sm-4 text-pp-crt-rg">Department of Information Reg No :</div>
        <div class="col-sm-4 developer">
          <a href="https://topline-tech.com" target="_blank" class="text-pp-crt">By : <b>T</b>op<b>L</b>ine</a>
        </div>

      </footer>
      <div id="notificator" class="alert alert-primary" role="alert">
        This is a primary alert—check it out!
      </div>

      <!-- js files -->

      <script src="<?= base_url('templatejs/jquery-3.4.1.min.js') ?>"></script>
      <script src="<?= base_url('templatejs/slick.min.js') ?>"></script>

      <script src="<?= base_url('templatejs/bootstrap.min.js') ?>"></script>
      <script src="<?= base_url('templatejs/popper.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/placeholders.min.js') ?>"></script>
      <script src="<?= base_url('templatejs/script.js') ?>"></script>    
      <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
      <script>
        var variable = {
          clearShoppingCartUrl: "<?= base_url('clearShoppingCart') ?>",
          manageShoppingCartUrl: "<?= base_url('manageShoppingCart') ?>",
          discountCodeChecker: "<?= base_url('discountCodeChecker') ?>"
        };
      </script>
      <script src="<?= base_url('assets/js/system.js') ?>"></script>
      <script src="<?= base_url('loadlanguage/all.js') ?>"></script>
      <script src="<?= base_url('templatejs/mine.js') ?>"></script>

      <?php if ($cookieLaw != false) { ?>
       <script type="text/javascript">
        window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
      </script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
      
    <?php } ?>
    <!-- footer end -->



    // otp verification code
    <script>
     var baseURL= "<?php echo base_url();?>";
     function sendOTP() {
      $(".error").html("").hide();
      var number = $("#mobile").val();
      console.log(number);
      if (number.length == 10 && number != null) {
        var input = {
          "mobile_number" : number,
          "action" : "send_otp"
        };
        $.ajax({
          url :baseURL+'otpcontroller/otpsender.php',
          type : 'POST',
          data : input,
          success : function(response) {
            $(".error").html(response);
          }
        });
      } else {
        $(".error").html('Please enter a valid number!')
        $(".error").show();
      }
    }

    function verifyOTP() {
      var val1 = $("#digit-1").val();
      var val2 = $("#digit-2").val();
      var val3 = $("#digit-3").val();
      var val4 = $("#digit-4").val();

      var otp =val1.concat(val2, val3,val4);
      console.log(otp);

      $(".error").html("").hide();
      $(".success").html("").hide();
      
      var input = {
        "otp" : otp,
        "action" : "verify_otp"
      };
      if (otp.length == 4 && otp != null) {
        console.log(otp.length);
        $.ajax({
          url :baseURL+'otpcontroller/otpsender.php',
          type : 'POST',
          data : input,
          success : function(response) {

            if (response=="1") {
              $(".error").html("Your OTP is verified");
              $(".error").show();
              setTimeout(function(){ 
               $("#exampleModal2").removeClass("fade").modal("hide"); }, 1000);
            }
            else{
              $(".error").html("Your OTP is not  verified");
              $(".error").show(); 
            }
            
          },
          error : function() {
            alert("ss");
          }
        });
      } else { 
        $(".error").html('You have entered wrong OTP.')
        $(".error").show();
      }
    }
  </script>

</body>
</html>
