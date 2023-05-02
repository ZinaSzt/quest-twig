<?php 

require_once __DIR__ . '/../config/twig.php';

$products = ['luth', 'clavecin', 'piano', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);