<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loop
{

    private static $CI;

    public function __construct()
    {
        self::$CI = & get_instance();
    }

    static function getCartItems($cartItems)
    {
        if (!empty($cartItems['array'])) {
            ?>
            <li class="cleaner text-right">
                <a href="javascript:void(0);" class="btn-blue-round" onclick="clearCart()">
                    <?= lang('clear_all') ?>
                </a>
            </li>
            <li class="divider"></li>
            <?php
            foreach ($cartItems['array'] as $cartItem) {
                ?>
                <li class="shop-item" data-artticle-id="<?= $cartItem['id'] ?>">
                    <span class="num_added hidden"><?= $cartItem['num_added'] ?></span>
                    <div class="item">
                        <div class="item-in">
                            <div class="left-side">
                                <img src="<?= base_url('/attachments/shop_images/' . $cartItem['image']) ?>" alt="" />
                            </div>
                            <div class="right-side">
                                <a href="<?= LANG_URL . '/' . $cartItem['url'] ?>" class="item-info">
                                    <span><?= $cartItem['title'] ?></span>
                                    <span class="prices">
                                        <?=
                                        $cartItem['num_added'] == 1 ? $cartItem['price'] : '<span class="num-added-single">'
                                        . $cartItem['num_added'] . '</span> x <span class="price-single">'
                                        . $cartItem['price'] . '</span> - <span class="sum-price-single">'
                                        . $cartItem['sum_price'] . '</span>'
                                        ?>
                                    </span>
                                    <span class="currency"><?= CURRENCY ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="item-x-absolute">
                            <button class="btn btn-xs btn-danger pull-right" onclick="removeProduct(<?= $cartItem['id'] ?>)">
                                x
                            </button>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
            <li class="divider"></li>
            <li class="text-center">
                <a class="go-checkout btn btn-default btn-sm" href="<?= LANG_URL . '/checkout' ?>">
                    <?=
                    !empty($cartItems['array']) ? '<i class="fa fa-check"></i> '
                    . lang('checkout') . ' - <span class="finalSum">' . $cartItems['finalSum']
                    . '</span>' . CURRENCY : '<span class="no-for-pay">' . lang('no_for_pay') . '</span>'
                    ?>
                </a>
            </li>
        <?php } else {
            ?>
            <li class="text-center"><?= lang('no_products') ?></li>
            <?php
        }
    }

    static public function getProducts($products, $classes = '', $carousel = false)
    {
        if ($carousel == true) {
            ?>
            <div class="carousel slide" id="small_carousel" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <?php
                    $i = 0;
                    while ($i < count($products)) {
                        if ($i == 0)
                            $active = 'active';
                        else
                            $active = '';
                        ?>
                        <li data-target="#small_carousel" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                        <?php
                        $i++;
                    }
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                }
                $i = 0;
                foreach ($products as $article) {
                    if ($i == 0 && $carousel == true) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    ?>
                    <!------ product category ------------->

                    <div class="card  <?= $classes ?> <?= $active ?>" style="width: 18rem;">
                       <?php
                       if ($article['old_price'] != '' && $article['old_price'] != 0 && $article['price'] != '' && $article['price'] != 0) {
                        $percent_friendly = number_format((($article['old_price'] - $article['price']) / $article['old_price']) * 100) . '%';
                        ?>
                        <span class="badge badge-danger ml-2 mt-2 px-2 font-weight-bold"><?= $percent_friendly ?> OFF</span>
                        <span class="price-down"></span>
                    <?php } ?>
                    <div>
                        <a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>">
                          <img src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>" class="img-fluid mx-auto d-block" style="height: 150px">
                      </a>
                  </div>
                  <div class="card-body">
                    <a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>" class="text-muted text-decoration-none"><?= character_limiter($article['title'], 70) ?></a>
                    <div class="text-muted">
                      1 kg
                  </div>
                  <div class="row">
                    <div class="col-5 mt-2">
                      <span class="font-weight-bold">
                       ₹<?= $article['price'] != '' ? number_format($article['price'], 0) : 0 ?>
                   </span>
                   <s class="pl-1 ">
                    ₹<?= $article['old_price'] != '' ?number_format($article['old_price'], 0) : 0 ?>
                </s>
            </div>
            <div class="col-7 ">

                        
                        <a href="javascript:void(0);" type="button" class="addTocartBtn add-to-cart btn btn-outline-success btn-rounded" style="border-radius: 1.25rem;" data-id="<?= $article['id'] ?>">Add To Cart</a>
                 

                    <div class="qty" style="display: none">



                       <a class=" qty bg-white text-danger border minus 
                       " onclick="removeProduct(<?= $article['id']?>),minusItem(this);">-</a>

                       <input type="number" class="input-cart" name="qty" value='' style="width: 20px;" >
                       <a class="bg-white text-danger border add-to-cart btn-add plus" onclick="plusItem(this);" data-id="<?= $article['id'] ?>">+</a>
                   </div>

               </a>

           </div>
       </div>
   </div>
   <div class="card-footer bg-white d-flex justify-content-center border-top-0" style="font-size: .9rem;">
      <span class="border bg-light text-primary ">&nbsp;<i class="fa fa-user-plus"></i>&nbsp;Club price:&#8377; 559<span class="pl-5">></span></span>

  </div>

</div>



<?php
$i++;
}
if ($carousel == true) {
    ?>
</div>
<a class="left carousel-control" href="#small_carousel" role="button" data-slide="prev">
    <i class="fa fa-5x fa-angle-left" aria-hidden="true"></i>
</a>
<a class="right carousel-control" href="#small_carousel" role="button" data-slide="next">
    <i class="fa fa-5x fa-angle-right" aria-hidden="true"></i>
</a>
</div>
<?php
}
}

}
