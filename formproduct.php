<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon_ST.jpg" type="image/x-icon">

    <title>Add product</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">
	<?php
	$id = "";
	$name = "";
  $category = "";
  $code = "";
	$price = "";
	$description = "";
	$title = "Add Product";
	$buttonTitle = "Add";
	
	if (isset($_GET["id"])) {
		require "connection.php";
		$id = $_GET["id"];
		$sql = "SELECT * FROM product WHERE id=" . $id;
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if ($row) {
			$name = $row["name"];
      $category = $row["category"];
      $code = $row["code"];
			$price = $row["price"];
			$description = $row["description"];
		}
		$title = "Edit Product";
		$buttonTitle = "Update";
	}
	
	?>

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/icon_add_phone.png" alt="logo_add_phone" width="72" height="72">
        <h2><?php echo $title ?></h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="processformproduct.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="mb-3">
              <label for="name">Name</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="name">Category</label>
              <div class="input-group">
                <select class="input-group" name="category">
					<option value="apple" <?php echo $category=="apple"? "selected" : "" ?>>Apple</option>
					<option value="samsung" <?php echo $category=="samsung"? "selected" : "" ?>>Samsung</option>
					<option value="oppo" <?php echo $category=="oppo"? "selected" : "" ?>>Oppo</option>
					<option value="nokia" <?php echo $category=="nokia"? "selected" : "" ?>>Nokia</option>
          <option value="xiaomi" <?php echo $category=="xiaomi"? "selected" : "" ?>>Xiaomi</option>
					<option value="realme" <?php echo $category=="realme"? "selected" : "" ?>>Realme</option>
          <option value="vivo" <?php echo $category=="vivo"? "selected" : "" ?>>Vivo</option>
					<option value="vsmart" <?php echo $category=="vsmart"? "selected" : "" ?>>Vsmart</option>
				</select>
              </div>
            </div>
      
      <div class="mb-3">
              <label for="code">Code</label>
              <div class="input-group">
                <input type="text" class="form-control" id="code" name="code" value="<?php echo $price ?>" required>
              </div>
            </div>

			<div class="mb-3">
              <label for="price">Price</label>
              <div class="input-group">
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $price ?>" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="description">Description</label>
              <div class="input-group">
                <textarea class="form-control" id="description" name="description" required><?php echo $description ?></textarea>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="fileToUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileToUpload" name="fileToUpload" required>
              </div>
            </div>
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">
				<?php echo $buttonTitle ?>
			</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 QUANG HUY NGUYEN THANH</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>