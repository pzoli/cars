<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Utils\PDODBUtility;
use app\Models\Car;

$loader = new FilesystemLoader(APP_ROOT . '/views/templates');
$twig = new Environment($loader);

$pdo = PDODBUtility::getInstance();
$model = $pdo->findById($id, "model");
$template = $twig->load("model_edit.html");

$manufacturer = $pdo->findById($model["manufacturer_id"], "manufacturer");

echo $template->render([
    'REQUEST_ROOT' => REQUEST_ROOT,
    'MODEL_LIST_URL' => $routes->get('model_list')
        ->getPath(),
    'ID' => $id,
    'MANUFACTURER_ID' => $model["manufacturer_id"],
    'MANUFACTURER_NAME' => $manufacturer["name"],
    'NAME' => $model["name"]
]);

?>