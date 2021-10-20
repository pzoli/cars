<?php 

namespace app\Controllers;

use App\Models\Manufacturer;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class ManufacturerController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/manufacturer_edit.php';
	}
	
	public function showAllAction(RouteCollection $routes)
	{   
	    require_once APP_ROOT . '/views/manufacturer_list.php';
	}
	
	public function showCreateViewAction(RouteCollection $routes)
	{
	    require_once APP_ROOT . '/views/manufacturer_create.php';
	}
	
	
	public function getAllManufacturerAsJsonAction(RouteCollection $routes)
	{
	    $models = Manufacturer::readAll();
	    header('Content-Type: application/json; charset=utf-8');
	    echo json_encode($models);
	}
	
	public function createNewManufacturer(RouteCollection $routes) {
	    $request = Request::createFromGlobals();
	    $data = json_decode($request->getContent());
	    Manufacturer::create($data);
	}
	
	public function updateManufacturer(RouteCollection $routes) {
	    $request = Request::createFromGlobals();
	    $data = json_decode($request->getContent());
	    Manufacturer::update($data);
	}
	
	public function deleteManufacturer($id, RouteCollection $routes) {
	    Manufacturer::delete($id);
	}
	
	
}