<link href="<?= base_url('templatecss/style-zaman.css') ?>" rel="stylesheet" />
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<section>
  <div class="container" id="shopping-cart">
    <div class="row">
      <div class="col-md-8 topspace" >
        <div class="card" style="margin-top: 100px">
          <div class="card-header">
            My Cart (<span style="color:black;"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span>)
          </div>
          <div class="card-body m-0 p-0">
            <?php foreach ($cartItems['array'] as $item) { ?>
              <!-- item list start-->
              <div class="col-md-12 px-size">
                <div class="alert alert-dismissible fade show p-0 mx-auto" role="alert ">
                  <div class="d-flex flex-row">
                    <div class="col-md-3 p-0 col-sm-2">
                     <img src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" class="img-fluid" alt="">
                     <div>
                     <span class="qty">
                        <span class="add-more-item">
                          <a class="" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);" style="text-decoration: none;">
                           <span class="minus bg-white text-danger border minus">-</span>
                         </a>

                         <input type="number" class="input-cart" name="qty" value='<?= $item['num_added'] ?>' >
                         <a class="refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);" style="text-decoration: none;">
                           <span class="plus bg-dark bg-white text-danger border plus" >+</span>
                         </a>
                       </span>
                     </span>
                   </div>
                    </div>
                    <div class="col-md-9 col-sm-10 font-size">
                      <span class="badge badge-primary mt-2">25% OFF</span>
                      <p class="py-0 my-0"><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></p>
                      <p class="text-muted pt-0 mt-0">1l</p>
                      
                     <span class="pl-1">x ₹<span><?= $item['price']?></span>
                   </span>
                   <span class="text-muted" style="text-decoration: line-through;"> ₹398</span>
                   <span class="margin font-weight-bold" > ₹<span><?= $item['sum_price']?></span></span>
                 </div>
                  <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" class="remove-product">
                                    <span>X</span>
                                </a>
              </div>
            </div>
          </div>
          <div class="bottom"></div>
          <!-- item list end  --> 
        <?php } ?>

      </div>
    </div>
  </div>
  <div class="col-md-4 mt-4" >
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
            <span class="pl-1"> ₹<?= $cartItems['finalSum']?>
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
          <button type="button" id="" class="btn btn-outline-success btn-rounded  py-1 mt-3 mb-3 btn-block" style="
          border-radius: 1.25rem;
          ">Checkout</button>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</section>


<script src="<?= base_url('templatejs/cart.js') ?>"></script>

