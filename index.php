<?php
require('vendor/autoload.php');
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$entity = ["Ajeet", "Niraj", "Gaadi"];
echo $twig->render('first.html.twig', ['entities' => $entity]);

