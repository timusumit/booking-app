<section class=" main_body">
<div class="container">
<div class="row">
<?php foreach($package_setup as $key=>$ps): ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mar-25-btm">
	<div class="img-thumbnail box-body">
		<div class=" text-center">
			<h4 class="text-success"><?php echo $ps['package_name']; ?></h4>
			<h6 class="font-italic font-weight-light text-info">Best for <?php echo $ps['best_for'] ?></h6>
			<h3><?php echo 'Rs. '.$ps['package_offer_price'].'/-' ?></h3>
			<h6 class="strike-through"><?php echo 'Rs. '.$ps['package_price'].'/-' ?></h6>
			<a href="<?php echo base_url('package/book/'.$ps['package_id']); ?>" class="btn btn-success">Book Now</a>
			</div>
			<p>
				<?php echo $ps['package_features']?>
			</p>	
	</div>
</div>
<div class="clearfix d-block d-sm-none"></div>
<?php endforeach; ?>
</div>
</div>
</section>