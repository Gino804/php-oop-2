<?php

include_once __DIR__ . '/Models/FoodProduct.php';
include_once __DIR__ . '/Models/ToyProduct.php';
include_once __DIR__ . '/Models/MiscellaneousProduct.php';

$product1 = new FoodProduct(1, 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 43.99, 'Cane', 545, 'prosciutto, riso');
$product2 = new FoodProduct(2, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'Cane', 600, 'manzo, cereali');
$product3 = new FoodProduct(3, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 34.99, 'Gatto', 400, 'tonno, pollo, prosciutto');
$product4 = new FoodProduct(4, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 2.95, 'Pesce', 30, 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$product5 = new MiscellaneousProduct(5, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 184.99, 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
$product6 = new MiscellaneousProduct(6, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'Pesce', 'Materiale espando', 'ND');
$product7 = new ToyProduct(7, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 13.49, 'Cane', 'ND', '8,5 cm x 10 cm', 'Galleggia e rimbalza');
$product8 = new ToyProduct(8, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 4.99, 'Gatto', 'ND', '8,5 cm x 10 cm', 'Morbido con codina in corda');

$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= $product->getImg() ?>" alt="<?= $product->getName() ?>">
                        <h2><?= $product->getName() ?></h2>

                        <?php
                        $animal = $product->getAnimal();
                        $icon = '';
                        if ($animal == 'Cane') $icon = 'dog';
                        else if ($animal == 'Gatto') $icon = 'cat';
                        else if ($animal == 'Uccello') $icon = 'kiwi-bird';
                        else $icon = 'fish';
                        ?>

                        <p><i class="fa-solid fa-<?= $icon ?>"></i><?= $product->getAnimal() ?></p>
                        <p>Prezzo: € <?= $product->getPrice() ?></p>

                        <?php if ($product instanceof FoodProduct) : ?>

                            <p>Peso netto: <?= $product->getNetWeight() ?>g</p>

                        <?php else : ?>

                            <?php if ($product instanceof ToyProduct) : ?>
                                <p>Caratteristiche: <?= $product->getTraits() ?></p>
                            <?php else : ?>
                                <p>Materiale: <?= $product->getMaterials() ?></p>
                            <?php endif ?>

                            <p>Dimensioni: <?= $product->getSize() ?></p>

                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>