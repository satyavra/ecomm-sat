<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
$arrCategories = array();
foreach ($all_categories as $categorie) {
  if (isset($_GET['category']) && is_numeric($_GET['category']) && $_GET['category'] == $categorie['sub_for']) {
    $arrCategories[] = $categorie;
  }
  if (!isset($_GET['category']) || $_GET['category'] == '') {
    if ($categorie['sub_for'] == 0) {
      $arrCategories[] = $categorie;
    }
  }
}
?>

<div class="container-fluid">
  <div class="row" style="margin-top:91px;">
    <div class="col-md-3 sidebarSubmenu pr-0 d-none d-sm-none d-md-block" >
      <div class="card">
        <a href="" class="list-group-item list-group-item-action border-top-0" data-toggle=""><h6 class="text-center pt-4 pb-1">Product Category</h6> 
        </a> 

        <?php
        function loop_tree($pages, $is_recursion = false)
        {
          if($is_recursion !== true)
          { 
            ?>
            <ul class="list-group list-group-flush sidemenu">
              <?php 
            }
            foreach ($pages as $page) {
              $children = false;
              ?>
              <li class="list-group-item">
                <?php
                if (isset($page['children']) && !empty($page['children'])) {
                  $children = true;
                }
                ?>
                <a href="<?= $children === true ? '#collapse_'.$page['id'] : '#' ?>" data-categorie-id="<?= $page['id'] ?>" class="<?= $children === true ? 'collapsed child-menu' : '' ?> <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>" <?= $children === true ? 'data-toggle="collapse"' : '' ?> aria-expanded="false"><?= $page['name'] ?></a>
                <?php
                if ($children === true) {?>
                  <ul class="list-group list-group-flush collapse submenu" id="collapse_<?= $page['id'];?>" >
                    <?php loop_tree($page['children'],true) ?>
                    <?php 
                  } else {
                  }?>
                </li>
                <?php 
              }
              ?>
            </ul>
            <?php
            if ($is_recursion === true) {
            }
          }
          loop_tree($home_categories);
          ?>

        </div>
      </div>
      <!-- right side contents -->
      <div class="col-md-9 itemList">
        <div class="row">
          <div class="col-md-12">
            <img class="img-fluid" src="<?= base_url('template/imgs/sale1.jpg') ?>">
          </div>

          <div class=" col-md-12 ">
            <div class=" ">
              <div class="row bg-white">
                <div class="col-md-6 col-sm-12 ">
                  <ol class="breadcrumb  bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                  <p class="font-weight-bold pl-3 mt-n4">Pulses</p>
                </div>

                <div class="col-md-6 col-sm-12  cat-filter">
                  <div class=" d-inline-flex float-right mt-2 " >
                    <label class="col-form-label float-sm-left pr-4 " for="name">Sort</label>
                    <select id="dashboard-filter" class="form-control text-danger"style="width: 240px;" >
                      <option>Popularity</option>
                      <option>Price Low to high</option>
                      <option>Price high to low</option>
                      <option>Discounts</option>
                      <option>Name(A to Z)</option>
                    </select>
                  </div>
                </div>

              </div>

            </div>
          </div>

        </div>

        <div class="btnStyleCategory d-md-none  border-top border-bottom py-2 bg-white"  style="overflow: scroll;
        white-space: nowrap;">
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"  style="
        border-radius: 1.25rem;">New Launches</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
        border-radius: 1.25rem;">Pulses</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"style="
        border-radius: 1.25rem;">Wheat</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"style="
        border-radius: 1.25rem;" >Vegetables</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
        border-radius: 1.25rem;">Pet care</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
        border-radius: 1.25rem;">Flour</a>
        <a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
        border-radius: 1.25rem;">Rice and other grains</a>


      </div>

      <div class="row">
        <?php
        for ($i=0; $i <=6; $i++) { ?>
          <div class="col-md-4 mt-1">
            <div class="card">
              <span class="badge badge-danger mt-2 ml-1 font-weight-bold" style="width: 66px">50% OFF</span><img class="img-fluid mx-auto d-block" src="<?=base_url('template/imgs/fishoil.jpeg')?>">
              <div class="card-body">               
                <p class="card-text text-muted">Quick sample text to create the card </p>
                <p class="card-text text-muted">pack of 6 </p>
                <div class="">
                  <span class="font-weight-bolder">&#8377; 1000 </span>&nbsp;<span class="text-muted"><s>2000</s></span>
                  <span class="qty pl-4">
                    <button type="button" class="addTocartBtn btn btn-outline-success btn-rounded  py-1" style="border-radius: 1.25rem;">Add To Cart</button>

                    <span class="add-more-item" style="display: none;">
                      <span class="minus bg-white text-danger border minus" onclick="minusItem(this);">-</span>
                      <input type="number" class="count" name="qty" value="1" >
                      <span class="plus bg-dark bg-white text-danger border plus" onclick="plusItem(this);">+</span>
                    </span>
                  </span>
                </div>
              </div>
              <div class="card-footer bg-white d-flex justify-content-center border-top-0" style="font-size: .9rem;">
                <span class="border bg-light text-primary ">&nbsp;<i class="fa fa-user-plus"></i>&nbsp;Club price:&#8377; 559<span class="pl-5">></span></span>
              </div>
            </div>
          </div>
        <?php }
        ?>

      </div>
    </div>
  </div>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
<script>


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>