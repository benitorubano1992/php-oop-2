<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/gioco.php";
require_once __DIR__ . "/Models/Cuccia.php";
require_once __DIR__ . "/database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ecommerce Cani e gatti</title>
</head>
<div class="container">
    <h1 class="text-center py-4">Ecommerce cani e gatti</h1>
    <div class="row row-cols-3">
        <?php foreach ($list as $product) { ?>
            <div class="col">
                <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
                    <p class="card-text">Category: <?php if ($product->getCategory()->getNameCategory() == "gatto") { ?>
                            <i class="fa-solid fa-cat"></i>
                        <?php } else { ?>
                            <i class="fa-solid fa-dog"></i>
                        <?php } ?>
                    </p>
                    <p class="card-text">Price : <?php echo $product->getPrice() ?>&euro;</p>
                    <?php if ($product instanceof Food) { ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Weight:<?php echo $product->getWeight() ?></li>
                            <li class="list-group-item">Expiration date: <?php echo $product->getExpiration() ?></li>
                        </ul>
                        <p class="card-text">Ingredients:</p>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($product->getIngredients() as $ingredient) { ?>
                                <li class="list-group-item"><?php echo $ingredient ?></li>
                            <?php  } ?>
                        </ul>
                    <?php } elseif ($product instanceof Cuccia) { ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Width:<?php echo $product->getWidth() ?></li>
                            <li class="list-group-item">height:<?php echo $product->getHeight() ?></li>
                            <li class="list-group-item">Material:<?php echo $product->getMaterial() ?></li>
                        </ul>
                    <?php } elseif ($product instanceof Gioco) { ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Color:<?php echo $product->getColor() ?></li>

                            <li class="list-group-item">Material:<?php echo $product->getMaterial() ?></li>
                        </ul>
                    <?php } ?>
                </div>


            </div>
        <?php } ?>
    </div>

</div>

<body>

</body>

</html>