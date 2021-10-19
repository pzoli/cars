<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Utils\PDODBUtility;
use app\Models\Car;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$template = $twig->load("car_create.html");

echo $template->render([
    'REQUEST_ROOT' => REQUEST_ROOT,
    'CAR_LIST_URL' => $routes->get('car_list')
        ->getPath(),
]);

?>