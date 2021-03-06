<?php
$name = $_POST["name"];
$category = $_POST["category"];
$code = $_POST["code"];
$price = $_POST["price"];
$description = $_POST["description"];

$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];

if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	die("Sorry, there was an error uploading your file.");
}

require "connection.php";

if (empty($_POST["id"])) {
	$sql = "INSERT INTO product(name, category, code, price, description, image) 
	VALUES (?, ?, ?, ?, ?, ?)";
} else {
	$sql = "UPDATE product SET name=?, category=?, code=?, price=?, description=?, image=? WHERE id=" . $_POST["id"];
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssiss", $name, $category, $code, $price, $description, $target_file);

if ($stmt->execute() === FALSE) {
	die("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();

header("Location: product.php");

?>