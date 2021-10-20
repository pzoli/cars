<?php
use Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$template = $twig->load("model_list.html");
echo $template->render([
    'REQUEST_ROOT' => REQUEST_ROOT, 
    'HOMEPAGE_URL' => $routes->get('homepage')->getPath() 
]);

?>