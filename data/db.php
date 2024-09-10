<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Bed.php';
require_once __DIR__ . '/../Model/Toy.php';

$categories = [
    new Category("Cani", "Prodotti specifici per cani", "Pelo Corto", "Taglia Media"),
    new Category("Gatti", "Prodotti specifici per gatti", "Pelo Lungo", "Taglia Piccola"),
    new Category("Cani e Gatti", "Prodotti per entrambi")
];

$dogCategory = $categories[0];
$catCategory = $categories[1];
$genericCategory = $categories[2];

$products = [
    new Food("Croccantini ", "Cibo per cani ", 35.00, $dogCategory, "High Protein"),
    new Toy("Pallina ", "Pallina ", 7.00, $dogCategory, "Rubber"),
    new Bed("Cuccia ", "Cuccia ", 25.00, $genericCategory, "Large"),
    new Toy("Giochino  Gatti", "Giochino con piume ", 5.00, $catCategory, "Feather"),
    new Bed("Cuccia Comoda ", "Cuccia comoda ", 40.00, $dogCategory, "Medium"),
    new Food("Cibo  Gatti Gourmet", "Cibo gourmet ", 30.00, $catCategory, "Gourmet")
];

try {
    $newCategory = new Category("Cani", "Prodotti  per cani", "Pelo Corto", "Taglia Media");
    $categories[] = $newCategory;
} catch (Exception $e) {
    echo 'ERRORE: ' . $e->getMessage();
}

try {
    $newProduct = new Product("Prodotto Test Errori", "Cibo per cani di alta qualità", 36.00, $newCategory);
    $products[] = $newProduct;
} catch (Exception $e) {
    echo 'ERRORE: ' . $e->getMessage();
}
