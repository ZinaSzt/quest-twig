<?php

require_once 'vendor/autoload.php'; // Inclure la bibliothèque Twig
$loader = new \Twig\Loader\FilesystemLoader('chemin/vers/dossier/vues');
$twig = new \Twig\Environment($loader);

echo $twig->render('details.html.twig');
