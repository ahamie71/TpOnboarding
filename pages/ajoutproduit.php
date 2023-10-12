<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:auth_login.php'); 
}
include '../dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $image = $_FILES["image"];

    $imagePath = ''; 
    if ($image && $image["error"] == 0) {
        $imagePath = '../public/images/' . $image["name"];
        move_uploaded_file($image["tmp_name"], $imagePath);
    }
    $db = databaseConnect();
    $req = "INSERT INTO products (name, price, description, image, fk_user) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($req);
    $user_id = $_SESSION['user']['id'];
    $stmt->execute([$name, $price, $description, $imagePath, $user_id]);
    header("Location:listProducts.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <h2>Ajouter un produit</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom du produit :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Prix :</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image du produit :</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter le produit</button>
    </form>
</div>
