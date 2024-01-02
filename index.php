<?php
require 'vendor/autoload.php';

$title = "Page d'accueil";
$content = "Bonjour le monde";

$loader = new \Twig\Loader\FilesystemLoader('src/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
]);

echo $twig->render('layout.html', [
    'title' =>title,
    'content' => $content,
]);

?>