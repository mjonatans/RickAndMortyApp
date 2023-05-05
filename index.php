<?php

use RickAndMorty\Core\Router;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require "vendor/autoload.php";

$loader = new FilesystemLoader(__DIR__ . '/App/Views');
$twig = new Environment($loader);

$router = new Router();
$view = $router->route();

echo $twig->render($view->getTemplate() . '.html.twig', [
    'characters' => $view->getData(),
]);

