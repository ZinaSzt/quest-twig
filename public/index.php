<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Amon';

echo $twig->render('home.html.twig', ['name' => $name]);
