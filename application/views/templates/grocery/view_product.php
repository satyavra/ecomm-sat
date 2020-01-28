<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="<?= base_url('templatecss/style-zaman.css') ?>" rel="stylesheet" />
<nav class="navbar navbar-expand-md text-muted bg-white sub-menu-position" >

    <div class="container" id="view-product">
        <a href="#" class="navbar-brand text-dark"> <i class="fa fa-shopping-basket"></i> Super Store - Mandawali</a>
        <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-muted font-weight-normal " href="#">Grocery & Staples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted font-weight-normal" href="#">Vegetables & Fruits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted font-weight-normal" href="#">Personal Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted font-weight-normal" href="#">Household Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted font-weight-normal" href="#">Home & Kitchen</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn border-0 dropdown-toggle text-muted" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow: none;">
                            More
                        </a>
                        <div class="dropdown-menu subMenuDropdown" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-muted" href="#">Biscuits,Snacks& Chocolates</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Beverages</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Kitchen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Breakfast & Dairy</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Grofres Exclusive</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Fresh and frozen Food</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Baby and Kids</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-muted" href="#">Pet care</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section>
    <div class="container-fluid" id="view-product" style="margin-top: 100px;"  >
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="">
                    <div class="single-img-slider">
                        <div  <?= $product['folder'] != null ? : '' ?>>
                         <img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" class="img-fluid" alt=""></div>

                         <?php
                         if ($product['folder'] != null) {
                            $dir = "attachments/shop_images/" . $product['folder'] . '/';
                            ?>

                            <?php
                            if (is_dir($dir)) {
                                if ($dh = opendir($dir)) {
                                    $i = 1;
                                    while (($file = readdir($dh)) !== false) {
                                        if (is_file($dir . $file)) {
                                            ?>
                                            <div>
                                                <img src="<?= base_url($dir . $file) ?>" data-num="<?= $i ?>" class="img-fluid" >
                                            </div>
                                            <?php
                                            $i++;
                                        }
                                    }
                                    closedir($dh);
                                }
                            }
                            ?>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <span class="badge badge-primary ">25% OFF</span>
                <h4><?= $product['title'] ?></h4>
                <span>more by</span>
                <a href="#">Milkfood</a>
                <div>
                    <span>MRP </span><span style="text-decoration: line-through;" >₹ <?= $product['old_price']?></span>
                </div>
                <div>
                    <span>Discounted price: </span>₹ <?= $product['price']?> <i class="fa fa-tags"></i>
                </div>
                <div class="mt-3">
                    <span class="alert alert-info py-1" role="alert">
                        <i class="fa fa-tags"></i> Price for Club Members
                    </span></div>
                    <div class="alert alert-info alert-dismissible fade show col-md-8 mt-4" role="alert">
                        <strong>Prices shown are for Noida</strong>
                        Where are you? 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group mt-2">
                            <select class="custom-select" id="inputGroupSelect" aria-label="Example select with button addon">
                                <option selected>type your city...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary " type="button"><i class="fa fa-location-arrow"></i> Detect</button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-2">Available in:</div>
                    <button type="button" class="btn btn-outline-success disabled">1l</button>
                    <div>
                        <?php if ($product['quantity'] > 0) { ?>

                            <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" class="add-to-cart btn-add">
                                <button type="button" id="addTocartBtn" class="btn btn-outline-success btn-rounded  py-1 mt-3 mb-3 add-to-cart btn-add" style="
                                border-radius: 1.25rem;
                                "> <span class="text-to-bg"><?= lang('add_to_cart') ?></span></button></a>
                            <?php } else { ?>
                                <div class="alert alert-info"><?= lang('out_of_stock_product') ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- second row start -->
                <div class="row mt-3">
                    <div class="col-md-6"><div>
                        <h4>Product Details</h4>
                        <h6 class="text-muted">Key Features</h6>
                        <p class="py-0 my-0">
                            Made from the finest butter which is clarified under precisely controlled conditions
                        </p>
                        <p class="py-0 my-0">
                            Rich in aroma and taste
                        </p>
                        <p>
                            Its fine granular texture and distinct aroma imparts a great flavour to dishes
                        </p>
                    </div>
                    <!-- hide and show section -->
                    <div class="accordion" id="accordion">
                        <div class="">
                            <div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordion">
                                <hr class="my-1">
                                <p class="mb-0">Unit</p>
                                <p class="text-muted mb-0">1l</p>
                                <hr class="my-1">
                                <p class="mb-0">Packaging Type</p>
                                <p class="text-muted mb-0">Carton</p>
                                <hr class="my-1">
                                <p class="mb-0">Shelf Life</p>
                                <p class="text-muted mb-0">12 month</p>
                                <hr class="my-1">
                                <p class="mb-0">Description</p>
                                <p class="text-muted mb-0"><?= $product['description'] ?></p>

                            </div>
                            <div id="heading">
                                <h2 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed hidebtn" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                        See More
                                    </button>
                                </h2>
                            </div> 
                        </div>
                    </div>
                    <!-- hide and show section -->
                </div>
                <div class="col-md-6">
                    <h5>Why shop from our website?</h5>
                    <div class="mt-3">
                        <i class="fa fa-tags"></i>
                        <span class="font-weight-bold">Easy returns & refunds</span>
                        <p class="ml-4" >Return products at doorstep and get refund in seconds.</p>
                    </div>
                    <div>
                        <i class="fa fa-tags"></i>
                        <span class="font-weight-bold">Lowest price guaranteed</span>
                        <p class="ml-4">Get difference refunded if you find it cheaper anywhere else.</p>
                    </div>
                </div>
            </div>
            <!-- second row end -->
        </div>
    </section>





    <script type="text/javascript">
        $(document).ready(function(){
            $('.single-img-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows:false
            });
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $(".hidebtn").click(function () {
                if($(".hidebtn").text()=="See More"){
                 $(".hidebtn").text("See Less -");
             }
             else {
                $(".hidebtn").text("");
            }
        });
        });       
    </script>

