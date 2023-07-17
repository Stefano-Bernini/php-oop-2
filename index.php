<?php
    require_once __DIR__.'/Shop/Product.php';
    require_once __DIR__.'/Shop/Food.php';

    $product = new Product('Test prodotto', 'https://static.zoomalia.com/prod_img/11540/lm_66584117275be999ff55a987b9381e01f961581340929.jpg', 34.10, 'Cane');
    $food = new Food('Test prodotto', 'https://static.zoomalia.com/prod_img/11540/lm_66584117275be999ff55a987b9381e01f961581340929.jpg', 23.99, 'Gatto', 10, 'Tonno, Pollo, Prosciutto');

    var_dump($product);
    var_dump($food);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolshop</title>
    </head>
    <body>
        
    </body>
</html>