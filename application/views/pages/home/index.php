<!DOCTYPE html>
<html>

<head>
	<style>
		body {
			/* background-color: #FBEEF9; */
			background-image: url("bgtokoabc.png");
			background-attachment: fixed;
			background-size: 1300px;
		}

		.input-group-append {
			/* text-align-last: ; */
			opacity: 80%;
		}

		#content {
			overflow: hidden;
			height: 3.6em;
			line-height: 1.2em;
			width: 200px;

		}

		#more:checked+div {
			height: auto;
		}

		.gawecheckbox {
			border: 4px solid #D6D7D4;
			border-radius: 15px;
			opacity: 82%;
			background-color: #EAEBE8;
			width: fit-content;
			padding-bottom: 0%;
			padding-top: 0%;
			padding-right: 4%;
			padding-left: 4%;
			margin-left: 80px;
			margin-top: 50px;
			margin-bottom: 40px;
		}

		.bannertoko {
			border: 0px solid #D6D7D4;
			border-radius: 15px;
			opacity: 98%;
			margin-top: 0px;
			z-index: 2;
			background-color: rgba(8, 27, 11, 3.5);
		}

		.judultoko {
			border: 4px solid #056E55;
			border-radius: 35px;
			opacity: 82%;
			background-color: #EAEBE8;
			width: fit-content;
			font-size: large;
			padding-bottom: 0%;
			padding-top: 0%;
			padding-right: 4%;
			padding-left: 4%;
			margin-left: 500px;
			margin-top: 20px;
			margin-bottom: 0px;
		}

		.pencetanscroll {
			border: 2px solid #E0E6E5;
			border-radius: 35px;
			opacity: 82%;
			background-color: #EAEBE8;
			width: fit-content;
			font-size: large;
			padding-bottom: 1.6%;
			padding-top: 1.6%;
			padding-right: 1%;
			padding-left: 1%;
			margin-left: 100px;
			margin-top: 20px;
			margin-bottom: 0px;
		}
	</style>
</head>

<body>
	<div class="bannertoko">
		<a href='' target='BANNER HOME ABC' title='Coffee Shop ABC'><img src='bgtokodrink.png' alt='Coffee Shop ABC' border='0' heght='10' width='1300' /></a>
	</div>
	<div class="pencetanscroll">
		<font color="#F81C35">
			<a href="#bawah">
				<h6 id="atas">MENU</h6>
			</a>
		</font>
	</div>
	<div class="judultoko">
		<h1>
			<center>
				<font color="#F81C35"><a href='http://localhost/web-penjualan_coffee/login' style="color:#FB292C">COFFEE SHOP ABC</a></font>
			</center>
		</h1>
	</div>
	<div class="gawecheckbox">
		<h3><b>Our Story</b></h3>
		<label>
			<input id="more" type="checkbox">Read more
			<div id="content">
				<font color="#F81C35"><i>Toko ABC</i></font> Our story begins in 1971 along the cobblestone streets of Seattle’s historic Pike Place Market. It was here where <b><i>Coffee Shop ABC</i></b> opened its first store, offering fresh-roasted coffee beans, tea and spices from around the world for our customers to take home. <br><br>Our name was inspired by the classic tale, <b>“Moby-Dick,”</b> evoking the seafaring tradition of the early coffee traders.<br><br>
				Ten years later, a young New Yorker named <font color="#F81C35"><b><i>Rony Irfannandhy</i></b></font> would walk through these doors and become captivated with Toko ABC coffee from his first sip. <br><br>After joining the company in 1982, a different cobblestone road would lead him to another discovery. It was on a trip to Milan in 1983 that <i>Rony Irfannandy</i> first experienced Italy’s coffeehouses, and he returned to Seattle inspired to bring the warmth and artistry of its coffee culture to Coffee Shop ABC.<br><br> By 1987, we swapped our brown aprons for green ones and embarked on our next chapter as a coffeehouse.
				<br><br><i>Coffee Shop ABC</i> would soon expand to <i>Chicago and Vancouver, Canada and then on to California, Washington, D.C. and New York</i>. By 1996, we would cross the Pacific to open our first store in <i>Japan</i>, followed by Europe in 1998 and China in 1999. <br><br>Over the next two decades, we would grow to welcome millions of customers each week and become a part of the fabric of tens of thousands of neighborhoods all around the world. In everything we do, we are always dedicated to Our Mission: to inspire and nurture the human spirit – one person, one cup, and one neighborhood at a time.
			</div>
		</label>
		<script>
			document.querySelector('button').addEventListener('click', function() {
				document.querySelector('#content').style.height = 'auto';
				this.style.display = 'none';
			});
		</script>
	</div>
	<main role="main" class="container">

		<?php $this->load->view('layouts/_alert') ?>

		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-3">
							<div class="card-body">

								<a href="#atas">
									<h3 id="bawah">MENU</h3>
								</a>

								Kategori Menu :<strong><?= isset($category) ? $category : 'All Item Category' ?></strong>
								<span class="float-right">
									Sort Price : <a href="<?= base_url('shop/sortby/asc') ?>" class="badge badge-primary">cheapest</a> | <a href="<?= base_url('shop/sortby/desc') ?>" class="badge badge-primary">Most Expensive</a>

								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<?php foreach ($content as $row) : ?>
						<div class="col-md-6">
							<div class="card mb-3">
								<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?= $row->product_title ?></h5>
									<p class="card-text">
										<font color="#E5983B"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></font>
									</p>
									<p class="card-text"><?= $row->description ?></p>
									<a href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-primary">
										<font color="#ABFA4C"><i class="fas fa-tags"></i></font> <?= $row->category_title ?>
									</a>
								</div>
								<div class="card-footer">
									<form action="<?= base_url('cart/add') ?>" method="POST">
										<input type="hidden" name="id_product" value="<?= $row->id ?>">
										<div class="input-group">
											<input type="number" name="qty" value="1" class="form-control">
											<div class="input-group-append">
												<button class="btn btn-primary" type="submit">
													<font color="#E1F8D1"><b>Order Here</b></font>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>

				<nav aria-label="Page navigation example">
					<?= $pagination ?>
				</nav>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-3">
							<div class="card-header">
								Search ..
							</div>
							<div class="card-body">
								<form action="<?= base_url('shop/search') ?>" method="POST">
									<div class="input-group">
										<input type="text" name="keyword" class="form-control" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
										<div class="input-group-append">
											<button class="btn btn-primary" type="submit">
												<i class="fas fa-search"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-3">
							<div class="card-header">
								Category Menu
								<b><i>Coffee Shop ABC</i></b>
							</div>
							<ul class="list-group">
								<li class="list-group-item"><a href="<?= base_url('home') ?>">All Item Category</a></li>
								<?php foreach (getCategories() as $category) : ?>
									<li class="list-group-item"><a href="<?= base_url("shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- <br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br> -->

	<!-- <br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br> -->
</body>


</html>