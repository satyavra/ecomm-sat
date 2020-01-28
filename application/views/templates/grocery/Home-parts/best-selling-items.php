<section>
	<div class="container">
		<span class="font-weight-bold">Best Selling Items</span>
		<span class="font-weight-bold float-right text-danger">View all></span>
		<div class="mt-1">
			<div class="product-card-one ">
				
				<?php	if (!empty($products)) {
					$load::getProducts($products,false);
				} else {
					?>
					<script>
						$(document).ready(function () {
							ShowNotificator('alert-info', '<?= lang('no_results') ?>');
						});
					</script>
					<?php
				}
				?> 								
			</div> 
		</div>
	</section>