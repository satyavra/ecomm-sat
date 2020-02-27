<link href="<?= base_url('templatecss/style-zaman.css') ?>" rel="stylesheet" />
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($cartItems['array'] == 0) {
  echo "<div class='card mx-auto mb-5' style='width: 18rem;
  margin-top: 150px;'>
  <div class='card-body'>

  <i class='fa fa-shopping-basket fa-4x  d-flex justify-content-center my-3' style='font-size:48px;color:red'></i>
    <p class='card-title text-center text-danger'>No items in your cart<br>
Your favourite items are just a click away</p>
   
    
    <a href='http://localhost/Grofers-clone/ecomm-sat/' class='btn btn-danger d-flex justify-content-center mt-5'>Continue shopping</a>
  </div>
</div>"; 
 
}else{
  ?> <section>
  <div class="container" id="shopping-cart" style="margin-top: 100px;">
    <div class="row"  style="height: 500px;">
      <div class="col-md-8 shopingCart" >
        <div class="card">
          <div class="card-header">
            My Cart (<span style="color:black;"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span>)
          </div>
          <div class="card-body m-0 p-0">
            <?php foreach ($cartItems['array'] as $item) { ?>
             <div class=" d-flex flex-row py-2">
               <div class="col-3 p-1">
                <img src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" class="img-fluid" alt="">

              </div>
              <div class="col-9 font-size">
               <span class="badge badge-primary">25% OFF</span>
               <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" class="remove-product">
                <span class="float-right">X</span>
              </a>
              <p class="py-0 my-0 hide"><?= $item['title'] ?></p>
              <p class="text-muted pt-0 my-0">1l</p>
              <span class="qty">
               <a class="" onclick="removeProduct(<?= $item['id']?>, true)" href="javascript:void(0);" style="text-decoration: none;">
                 <span class="bg-white text-danger border minus">-</span>
               </a>
               <input type="number" class="input-cart" name="qty" value='<?= $item['num_added'] ?>' >
               <a class="refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);" style="text-decoration: none;">
                 <span class="bg-white text-danger border plus" >+</span>
               </a>
             </span>
             <span class="pl-1">x ₹<span><?= strtok($item['price'],".")?></span>
             <span class="text-muted" style="text-decoration: line-through;"> ₹398</span>
             <span class="float-right"><span class="font-weight-bold"> ₹<span><?=strtok($item['sum_price'],"."); ?></span></span></span>

           </div>
         </div>
         <div class="bottom"></div>
       <?php } ?>
     </div>
   </div>
 </div>

 <div class="col-md-4" >
  <div class="card" style="position: sticky;top:100px;">
    <div class="card-header">
      PRICE DETAILS
    </div>
    <div class="card-body">
      <div class="d-flex mb-2 flex-row">
        <div class="col-md-6">
          Price ( <span style="color:black;"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span> items)
        </div>
        <div class="col-md-6 text-right">
          <span class="pl-1"> ₹<?=strtok($cartItems['finalSum'],".") ?>
        </span>
      </div>
    </div>
    <div class="d-flex my-4 flex-row">
      <div class="col-md-6">
        Delivery Fee
      </div>
      <div class="col-md-6 text-right">
        <span class="pl-1"> ₹<input type="number" class="input-checkout-total" name="" value="264">
        </span>
      </div>
    </div>
    <div class="d-flex flex-row my-4">
      <div class="col-md-6">
        Total
      </div>
      <div class="col-md-6 text-right">
        <span class="pl-1"> ₹<input type="number" class="input-checkout-total" name="" value="264">
        </span>
      </div>
    </div>
    <div>
      <a type="button" id="" class="btn btn-outline-success btn-rounded  py-1 mt-3 mb-3 btn-block" href="<?= LANG_URL . '/checkout' ?>" style="
      border-radius: 1.25rem;
      ">Checkout</a>
    </div>

  </div>
</div>
</div>
</div>
</div>
</section> <?php 
}

?>
