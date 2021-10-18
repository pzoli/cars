<?php 

namespace app\Controllers;

use App\Models\Manufacturer;
use Symfony\Component\Routing\RouteCollection;

class ManufacturerController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/manufacturer.php';
	}
	
	public function showAllAction(RouteCollection $routes)
	{   
	    require_once APP_ROOT . '/views/manufacturer_list.php';
	}
	
	public function getAllManufacturerAsJsonAction(RouteCollection $routes)
	{
	    $models = Manufacturer::readAll();
	    header('Content-Type: application/json; charset=utf-8');
	    echo json_encode($models);
	}
	
	
}