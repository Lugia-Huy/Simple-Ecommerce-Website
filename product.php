<!doctype html>
<?php
include("auth.php");
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   		<meta name="description" content="">
    	<meta name="author" content="">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" href="images/icon_ST.jpg" type="image/x-icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    	<title>Products</title>
    </head>
    <body class="bg-light">
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
					<li class="nav-item">
						<a class="nav-link" href="index.php"><strong>Home</strong></a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" href="about.php"><strong>About Us</strong></a>
					</li>
					<li class="nav-item active">
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

        <div style="overflow-x:auto;">
		<table cellpadding="30" cellspacing="20" border="0" style="border-collapse: collapse; margin: auto; margin-top: 60px">

			<tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
				<td colspan="4">
					<a class="btn btn-primary" href="formproduct.php" role="button">Add product</a>
				</td>
			</tr>
			<tr class="header">
				<td style="text-align:center">Image</td>
				<td style="text-align:center">Name</td>
				<td style="text-align:center">Code</td>
				<td style="text-align:center">Price</td>
				<td style="text-align:center">Description</td>
				<td style="text-align:center">Action</td>
			</tr>
			<?php
			require "connection.php";
			
			$sql = "SELECT * FROM product";
			$result = $conn->query($sql);
			
			while($row = $result->fetch_assoc()) {
			?>
			<tr class="item">
				<td><img src="<?php echo $row["image"] ?>" style="max-height: 80px"></td>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["code"] ?></td>
				<td><?php echo $row["price"]?></td>
				<td><?php echo $row["description"] ?></td>
				<td><a class="btn btn-primary" href="formproduct.php?id=<?php echo $row["id"] ?>" role="button">Edit</a> | <a class="btn btn-primary" href="delete.php?id=<?php echo $row["id"] ?>"  role="button" class="delete">Delete</a></td>
			</tr>
			<?php 
			}
			?>
			<tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
				<td colspan="5">
					<p>Total products: <?php echo $result->num_rows ?></p>
				</td>
			</tr>
		</table>
		</div>
    </body>
</html>