<?php 

namespace app\Controllers;

use App\Models\Car;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class CarController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/car.php';
	}
	
	public function showAllAction(RouteCollection $routes)
	{   
	    require_once APP_ROOT . '/views/car_list.php';
	}
	
	public function getAllCarAsJsonAction(RouteCollection $routes)
	{
	    $cars = Car::readAll();
	    header('Content-Type: application/json; charset=utf-8');
	    echo json_encode($cars);
	}
	
	public function createNewCar(RouteCollection $routes) {
        $request = Request::createFromGlobals();
        $data = json_decode($request->getContent());
        //var_dump($data);
        Car::create($data);
    }	
}