<!---- products category list ---->
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
	
	<div class="container" style="margin-top: 100px;">
		<div class="card px-5  py-1 mt-3 bg-white">
			<div class="proc-cat">
				<?php if (!empty($arrCategories)) { ?>
					<?php
					foreach ($arrCategories as $categorie) {
						?>
						
						<a href="<?php echo site_url('productCat')?>">
							<div class="d-flex justify-content-center">
								<figure class="figure">
									<img src="<?=base_url('template/imgs/fishoil.jpeg')?>" class="figure-img img-fluid rounded" alt="...">
									<p class="text-center"><?= $categorie['name'] ?></p>
								</figure>
							</div>
						</a>
						<?php
					}
					?>
					
				<?php } else { ?>
					<div class="alert alert-info"><?= lang('no_sub_categories') ?></div>
				<?php } ?>
				
			</div>
		</div>
	</div>
</section>
<!------- single image slider ------------------>

<section>
	<div class="container">
		<div class="card px-lg-5 mt-3 bg-white ">
			<div class="single-img">
				<div><img class="img-fluid " src="<?=base_url('template/imgs/banner1.jpg')?>"></div>
				<!-- <div><img src="images/banner2.jpg"></div> -->
				<div><img class="img-fluid" src="<?=base_url('template/imgs/banner1.jpg')?>"></div>
				<div><img class="img-fluid" src="<?=base_url('template/imgs/banner1.jpg')?>"></div>

			</div>
		</div>  
	</div>
</section>