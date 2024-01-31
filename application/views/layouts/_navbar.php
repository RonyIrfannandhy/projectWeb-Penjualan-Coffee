<style>
	body {
		color: #0A6428;
	}

	.container {
		width: 2700px;
		height: 70px;
		border-radius: 50px;
		padding: 15px;
	}

	.navbar {
		padding-bottom: 8px;
		opacity: 97%;
	}

	.navbar-brand {
		border: 4px solid #D8BFD8;
		background-color: #D8BFD8;
		border-radius: 50px;
		opacity: 80%;
		padding: 2%;
	}
</style>

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
	<div class="container">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<table>
			<p><a class="navbar-brand" href="<?= base_url() ?>">
					<font color="#EE161A">
						<i><b>Coffee Shop ABC </b></i>
					</font>
				</a></p>
		</table>
		<br><br>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">
						<font color="#827F7F">Home </font><span class="sr-only">(current)</span>
					</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
						<a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
						<a href="<?= base_url('order') ?>" class="dropdown-item">Order</a>
						<a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
					</div>
				</li> -->
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i>
						<font color="#0E84FA"> Keranjang Belanja</font>(<?= getCart() ?>)
					</a>
				</li>
				<?php if (!$this->session->userdata('is_login')) : ?>
					<li class="nav-item">

						<a href="<?= base_url('login') ?>" class="nav-link">
							<font color="green"><b>Login</b></font>
						</a>

					</li>
					<li class="nav-item">
						<a href="<?= base_url('register') ?>" class="nav-link">
							<font color="#DE3434"><b>Register</b></font>
						</a>
					</li>
				<?php else : ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata("name") ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">
							<!-- <a href="<?= base_url('profile') ?>" class="dropdown-item">Profile</a> -->
							<a href="<?= base_url('myorder') ?>" class="dropdown-item">Orders</a>
							<a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>
<br>