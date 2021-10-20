<?php 

namespace app\Controllers;

use App\Models\Car;
use Symfony\Component\Routing\RouteCollection;
use App\Utils\RequestHolder;
class CarController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/car_edit.php';
	}
	
	public function showAllAction(RouteCollection $routes)
	{   
	    require_once APP_ROOT . '/views/car_list.php';
	}

	public function showCreateViewAction(RouteCollection $routes)
	{
	    require_once APP_ROOT . '/views/car_create.php';
	}
	
	public function getAllCarAsJsonAction(RouteCollection $routes)
	{
	    $cars = Car::readAll();
	    header('Content-Type: application/json; charset=utf-8');
	    echo json_encode($cars);
	}
	
	public function createNewCar(RouteCollection $routes) {
	    $requestHolder = RequestHolder::getInstance();
	    $data = json_decode($requestHolder->getRequest()->getContent());
        Car::create($data);
    }
    
    public function updateCar(RouteCollection $routes) {
        $requestHolder = RequestHolder::getInstance();
        $data = json_decode($requestHolder->getRequest()->getContent());
        Car::update($data);
    }

    public function deleteCar($id, RouteCollection $routes) {
        Car::delete($id);
    }
    
}