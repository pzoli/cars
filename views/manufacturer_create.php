<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Utils\PDODBUtility;
use app\Models\Car;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$pdo = PDODBUtility::getInstance();
$template = $twig->load("manufacturer_create.html");

echo $template->render([
    'REQUEST_ROOT' => REQUEST_ROOT,
    'MANUFACTURER_LIST_URL' => $routes->get('manufacturer_list')
        ->getPath()
]);

?>