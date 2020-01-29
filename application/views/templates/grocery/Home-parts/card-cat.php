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

<style type="text/css">
	.card-header .fa {
		transition: .3s transform ease-in-out;
	}
	.card-header .collapsed .fa {
		transform: rotate(90deg);
	}
	.something-else .fa {
		transition: .3s transform ease-in-out;
	}
	.something-else .collapsed .fa {
		transform: rotate(-90deg);
	}
	.list .fa {
		transition: .3s transform ease-in-out;
	}
	.list .collapsed .fa {
		transform: rotate(-90deg);
	}

</style>

<section class="mt-3 mb-5">
	<div class="container">
		<span class="font-weight-bold">Categories</span>
		<div class="row">

			<?php
			foreach ($arrCategories as $categorie) {
				?>
				<div class="col-md-6 mt-3">
					<div class="card card-body ">
						<div class="d-flex flex-row">
							<div class="col-4"><img class="img-fluid mx-auto " src="<?=base_url('template/imgs/item1.png')?>"></div>
							<div class="col-7">
								<p class="text-danger">UPTO 60% OFF</p>
								<h5><?= $categorie['name'] ?></h5>
								<p>lorel ipsum</p>
							</div>
							<i class="fa fa-chevron-right pull-right my-auto"></i>
						</div>
					</div>
				</div>
				
			<?php }
			?>		
		</div>
	</div>
</section>