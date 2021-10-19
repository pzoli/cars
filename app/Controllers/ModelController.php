<?php 

namespace app\Controllers;

use App\Models\Model;
use Symfony\Component\Routing\RouteCollection;

class ModelController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/model_edit.php';
	}
	
	public function showAllAction(RouteCollection $routes)
	{   
	    require_once APP_ROOT . '/views/model_list.php';
	}
	
	public function getAllModelAsJsonAction(RouteCollection $routes)
	{
	    $models = Model::readAll();
	    header('Content-Type: application/json; charset=utf-8');
	    echo json_encode($models);
	}
	
	
}