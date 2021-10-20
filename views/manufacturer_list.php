<?php
use Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$template = $twig->load("manufacturer_list.html");
echo $template->render([
    'request_root' => REQUEST_ROOT, 
    'homepage_url' => $routes->get('homepage')->getPath() 
]);

?>