<?php

require '../vendor/autoload.php';
echo 'hello';

$products = ['un sticker yoshi jaune', 'un poster de Sephiroth', 'un livre de Jeu de rôle Pathfinder', 'Une boite à dés', 'une peluche de Boo'];
$count=0;
var_dump($products);

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);

