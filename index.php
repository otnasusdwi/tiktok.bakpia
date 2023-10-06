<?php
date_default_timezone_set('Asia/Jakarta');
$date = date("M d, Y H:i:s");
$newDate = date('M d, Y H:i:s', strtotime($date. ' + 2 hours'));
include('products.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bakpia Juwara Satoe</title>
	<link href="assets/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<script src="assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row mt-4 mb-5">
			<div class="col-12">
				<div class="text-center">
					<img src="assets/images/logo.jpeg" width="200" class="rounded" alt="...">
					<br>
					<div class="title">
						<h2><strong>Bakpia Juwara Satoe <img src="assets/images/verify.png" height="27" class="rounded" alt="..."></strong></h2> 
					</div>
				</div>
			</div>
		</div>

		<?php foreach ($products as $key => $product) { ?>
		<?php if ($product['pinned'] == true || $product['pinned'] == 1 || $product['pinned'] == 'yes') { ?>
		<div class="card card-pinned-product mt-4 mb-4" onclick="window.location.href='<?=$product['url']?>';">
			<div class="card-body">
				<div class="row">
					<div class="col-7">
						<div class="text-center">
							<img src="<?=$product['url_image']?>" width="auto" class="rounded img-fluid"
								alt="bakpia-basah-coklat">
							<img src="assets/images/pin.png" class="pin">
						</div>
					</div>
					<div class="col-5">
						<div class="card h-100 card-desc">
							<p>
								<?php if ($product['authorized'] != 0) { ?>
								<span class="badge bg-dark authorized">Authorized</span>
								<br>
								<?php } ?>
								<!-- <span class="product-name"><?= substr("Bakpia Basah Coklat", 0, 20) ?>...</span> -->
								<span class="product-name-pinned"><b><?= ucwords(strtolower($product['name'])) ?></b></span>
								<br>

								<?php if ($product['flash_sale'] != 0) { ?>
								<span class="badge bg-secondary bg-flashsale">
									<img src="assets/images/thunder.png" height="10"> Flash Sale <span id="flash-sale-0"></span>
								</span>
								<?php } ?>

								<?php if ($product['gratis_ongkir'] != 0) { ?>
								<span class="badge bg-secondary bg-gratisongkir">
									<img src="assets/images/truck.png" height="10"> Gratis Ongkir
								</span>
								<?php } ?>

								<?php if ($product['cashback'] != 0) { ?>
								<span class="badge bg-secondary bg-cashback">
									<?=$product['cashback']?>
								</span>
								<br>
								<?php } ?>


								<span class="rating"><img src="assets/images/star.png" height="10" class="star"> 4.7 | 10K
									Terjual</span>
								<br>

								<?php if ($product['harga_coret'] != 0) { ?>
								<span class="harga-coret"
									style="text-decoration: line-through rgb(223, 43, 43);"><?=$product['harga_coret']?></span>
								<?php } ?>

								<?php if ($product['harga_jual'] != 0) { ?>
								<span class="harga-jual"><?=$product['harga_jual']?></span>
								<br />
								<?php } ?>
								<div class="d-grid gap-2">
									<button type="button" class="btn btn-danger btn-primary btn-beli">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-cart cart" viewBox="0 0 16 16">
											<path
												d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
										</svg>
										Beli
									</button>
								</div>
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php } else { ?>
		<div class="card card-product mt-4 mb-4" onclick="window.location.href='<?=$product['url']?>';">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<div class="text-center">
							<img src="<?=$product['url_image']?>" width="auto" class="rounded img-fluid"
								alt="bakpia-basah-coklat">
							<div class="text-top-left"><?=$key+1?></div>
						</div>
					</div>
					<div class="col-7">
						<div class="card h-100 card-desc">
							<p>
								<?php if ($product['authorized'] != 0) { ?>
								<span class="badge bg-dark authorized">Authorized</span>
								<br>
								<?php } ?>
							</p>
							<!-- <span class="product-name"><?= substr("Bakpia Basah Coklat", 0, 20) ?>...</span> -->
							<h5 class="product-name"><b><?= ucwords(strtolower($product['name'])) ?></b></h5>
							<br>
							<p>
								<?php if ($product['flash_sale'] != 0) { ?>
								<span class="badge bg-secondary bg-flashsale">
									<img src="assets/images/thunder.png" height="10"> Flash Sale <span id="flash-sale-0"></span>
								</span>
								<?php } ?>

								<?php if ($product['gratis_ongkir'] != 0) { ?>
								<span class="badge bg-secondary bg-gratisongkir">
									<img src="assets/images/truck.png" height="10"> Gratis Ongkir
								</span>
								<?php } ?>

								<?php if ($product['cashback'] != 0) { ?>
								<span class="badge bg-secondary bg-cashback">
									<?=$product['cashback']?>
								</span>
								<br>
								<?php } ?>


								<span class="rating"><img src="assets/images/star.png" height="10" class="star"> 4.7 | 10K
									Terjual</span>
								<br>

								<?php if ($product['harga_coret'] != 0) { ?>
								<span class="harga-coret"
									style="text-decoration: line-through rgb(223, 43, 43);"><?=$product['harga_coret']?></span>
								<?php } ?>

								<?php if ($product['harga_jual'] != 0) { ?>
								<div class="row">
									<div class="col-6 text-start">
										<span class="harga-jual"><?=$product['harga_jual']?></span>
									</div>
									<div class="col-6 text-end">
										<button type="button" class="btn btn-danger btn-sm">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
												class="bi bi-cart cart" viewBox="0 0 16 16">
												<path
													d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
											</svg>
											Beli
										</button>
									</div>
								</div>
								<?php } else { ?>
								<div class="d-grid gap-2">
									<button type="button" class="btn btn-danger btn-sm btn-beli">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-cart cart" viewBox="0 0 16 16">
											<path
												d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
										</svg>
										Beli
									</button>
								</div>
								<?php } ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php } ?>
	</div>

	<?php for($i=0; $i<count($products); $i++){ ?>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("<?=$newDate?>").getTime();

		// Update the count down every 1 second
		var x = setInterval(function () {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id="demo"
			if (document.getElementById("flash-sale-<?=$i?>")) {
				document.getElementById("flash-sale-<?=$i?>").innerHTML = "0" + hours + ":" + minutes + ":" + seconds;
			}
		}, 1000);
	</script>
	<?php }?>

</body>

</html>