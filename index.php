<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>OOP 2</title>
</head>
<body>

    <h1 class="green_txt">Our Products</h1>
    
    <div class="container">
        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="card">
                    <h3 class="card_title"><?php echo $product->getName() ?></h3>
                    <p class="prod_description">
                        <strong>Descrizione:</strong> 
                        <?php echo $product->getDescription() ?>
                    </p>
                    <span class="price">
                        €<?php echo number_format($product->getPrice(), 2, ',', '.'); ?>
                    </span>
                    <h4 class="list_title">Categoria</h4>
                    <ul>
                        <li><strong>Nome:</strong> <?php echo $product->getCategory()->getName(); ?></li>
                        <li><strong>Descrizione:</strong> <?php echo $product->getCategory()->getDescription(); ?></li>
                        <li><strong>Lunghezza del pelo:</strong> <?php echo $product->getCategory()->getFurLength() ?: 'N/A'; ?></li>
                        <li><strong>Taglia:</strong> <?php echo $product->getCategory()->getSize() ?: 'N/A'; ?></li>
                    </ul>
                    <?php if ($product instanceof Food): ?>
                    <p><strong>Tipo di Dieta:</strong> <?php echo $product->getDietType(); ?></p>
                    <?php elseif ($product instanceof Toy): ?>
                    <p><strong>Materiale:</strong> <?php echo $product->getMaterial(); ?></p>
                    <?php elseif ($product instanceof Bed): ?>
                    <p><strong>Dimensioni:</strong> <?php echo $product->getSize(); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>