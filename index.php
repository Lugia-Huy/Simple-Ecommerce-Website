<!doctype html>
<?php
include("auth.php");
?>
<html lang="en">
  	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" href="images/icon_ST.jpg" type="image/x-icon">

    	<title>Sébastian Shop</title>
  	</head>
  	<body>
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logo-ST.jpg" alt="logoST" width="50" height="40"
					class="d-inline-block align-top" loading="lazy"><strong>Sébastian Titan</strong></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><strong>Home</strong></a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" href="about.php"><strong>About Us</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="product.php"><strong>Product</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="shopingcart.php"><strong>Cart</strong></a>
					</li>
					<li class="nav-item">
						<a class="btn btn-primary" href="logout.php" role="button"><strong>Logout</strong></a>
					</li>
				</ul>
				</div>
			</div>
		</nav>

		<div class="container" style="margin-top: 60px">
			<div class="row">
				<div class="col-sm-3">
					<h1 class="my-4">Sébastian Products</h1>
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php?category=apple">Apple</a></li>
						<li class="list-group-item"><a href="index.php?category=samsung">Samsung</a></li>
						<li class="list-group-item"><a href="index.php?category=oppo">Oppo</a></li>
						<li class="list-group-item"><a href="index.php?category=nokia">Nokia</a></li>
					</ul>
				</div>
				<div class="col-sm-9">
					<div id="carouselExampleControls" class="carousel slide my-4" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/promotion_1.png" class="d-block w-100" alt="discount_1">
							</div>
							<div class="carousel-item">
								<img src="images/promotion_2.png" class="d-block w-100" alt="discount_2">
							</div>
							<div class="carousel-item">
								<img src="images/promotion_3.png" class="d-block w-100" alt="discount_3">
							</div>
							<div class="carousel-item">
								<img src="images/promotion_4.png" class="d-block w-100" alt="discount_4">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					
					<div class="row mt-3">
						<?php
						require "connection.php";
						$sql = "SELECT * FROM product";
						if (isset($_GET["category"])) {
							$category = $_GET["category"];
							$sql .= " WHERE category='$category'";
						}
						$result = $conn->query($sql);
						while ($row=$result->fetch_assoc()) {
						?>
						<div class="col-sm-4 mt-2">
							
							<div class="card" style="margin: auto;">
								<img src="<?php echo $row["image"] ?>" class="card-img-top" alt="..." style="height:250px;" class="responsive">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row["name"] ?></h5>
									<p class="card-text"><?php echo $row["description"] ?><br>
									Price: $<?php echo $row["price"] ?>
									</p>
								</div>
							</div>
							
						</div>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  	</body>

	<footer class="page-footer bg-dark text-white font-small mdb-color pt-4" style="margin-top: 30px;">
		<div class="container text-center text-md-left">
			<div class="row text-center text-md-left mt-3 pb-3">
				<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Sébastian Shop</h6>
				<img src="images/logo-ST.jpg" style="width:60%; "alt="">
				<p>Your pleasure is our responsibility!</p>
				</div>
				<hr class="w-100 clearfix d-md-none">
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
				<p>
					<a href="#!">Phone</a>
				</p>
				<p>
					<a href="#!">Laptop</a>
				</p>
				<p>
					<a href="#!">Tablet</a>
				</p>
				<p>
					<a href="#!">Micro</a>
				</p>
				</div>
				<hr class="w-100 clearfix d-md-none">

				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
				<p>
					<i class="fas fa-home mr-3"></i> Ho Chi Minh City, D.7, VN</p>
				<p>
					<i class="fas fa-envelope mr-3"></i> sebastianshop@gmail.com</p>
				<p>
					<i class="fas fa-phone mr-3"></i> + 84 123 456 78</p>
				<p>
					<i class="fas fa-print mr-3"></i> + 84 234 567 89</p>
				</div>
			</div>
		<hr>
			<div class="row d-flex align-items-center">
				<div class="col-md-7 col-lg-8">
				<p class="text-center text-md-left">© 2020 Copyright: NGUYEN THANH QUANG HUY</p>
				</div>
				<div class="col-md-5 col-lg-4 ml-lg-0">
				<div class="text-center text-md-right">
					<ul class="list-unstyled list-inline">
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1">
						<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</html>