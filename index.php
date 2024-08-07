<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio API</title>
</head>
<body>
    
<?php
require("ConexionAPI.php");
require("functions.php");

$api = "https://fakestoreapi.com/products";
$api_procesada = procesar_datos_api($api);




?>
<section>

<?php foreach ($api_procesada as $producto): ?>
    <div class="products">
        <img src="<?= $producto['image']; ?>" alt="Product Image">
        <h1 class="title"><?= $producto['title']; ?></h1>
        <p class="description"><?= substr($producto['description'],0,81); ?></p>
        <h3 class="price">U$S<?=$producto['price']; ?></h3>
        <h3 class="price">$<?= cambiar_moneda($producto['price']); ?></h3>
    </div>
<?php endforeach; ?>

</section>
</body>
</html>