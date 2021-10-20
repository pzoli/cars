<?php 

namespace app\Controllers;

use App\Models\Manufacturer;
use Symfony\Component\Routing\RouteCollection;
use App\Utils\RequestHolder;

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
	    $requestHolder = RequestHolder::getInstance();
	    $data = json_decode($requestHolder->getRequest()->getContent());
	    Manufacturer::create($data);
	}
	
	public function updateManufacturer(RouteCollection $routes) {
	    $requestHolder = RequestHolder::getInstance();
	    $data = json_decode($requestHolder->getRequest()->getContent());
	    Manufacturer::update($data);
	}
	
	public function deleteManufacturer($id, RouteCollection $routes) {
	    Manufacturer::delete($id);
	}
	
	
}