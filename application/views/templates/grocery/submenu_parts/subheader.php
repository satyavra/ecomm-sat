<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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

<nav class=" navbar navbar-expand-md text-muted bg-white d-none d-sm-none d-md-block" style="position: sticky; top: 79px; z-index:100">
  <div class="container-fluid">
    <a href="#" class="navbar-brand text-dark"> <i class="fa fa-shopping-basket"></i> Super Store - Mandawali</a>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
      <ul class="navbar-nav">
        <?php
        foreach ($arrCategories as $categorie) {
          ?>
          <li class="nav-item active">
            <a class="nav-link text-muted font-weight-normal " href="#"><?= $categorie['name'] ?></a>
          </li>
        <?php }
        ?>
      </ul>
    </div>
  </div>
</nav>





