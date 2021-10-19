<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Utils\PDODBUtility;
use app\Models\Car;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$pdo = PDODBUtility::getInstance();
$car = $pdo->findById($id, "car");
$template = $twig->load("car_edit.html");

$model = $pdo->findById($car["model_id"], "model");

echo $template->render([
    'REQUEST_ROOT' => REQUEST_ROOT,
    'CAR_LIST_URL' => $routes->get('car_list')
        ->getPath(),
    'ID' => $id,
    'MODEL_ID' => $car["model_id"],
    'MODEL_NAME' => $model["name"],
    'CHASSIS_NUMBER' => $car["chassis_number"]
]);

?>