<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

$routeGetCar = new Route(constant('URL_SUBFOLDER') . '/car/{id}', array('controller' => 'CarController', 'method'=>'showAction'), array('id' => '[0-9]+'));
$routes->add('car', $routeGetCar);
$routes->add('car_list', new Route(constant('URL_SUBFOLDER') . '/car', array('controller' => 'CarController', 'method'=>'showAllAction')));

$routes->add('model', new Route(constant('URL_SUBFOLDER') . '/model/{id}', array('controller' => 'ModelController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('model_list', new Route(constant('URL_SUBFOLDER') . '/model', array('controller' => 'ModelController', 'method'=>'showAllAction')));

$routes->add('manufacturer', new Route(constant('URL_SUBFOLDER') . '/manufacturer/{id}', array('controller' => 'ManufacturerController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('manufacturer_list', new Route(constant('URL_SUBFOLDER') . '/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'showAllAction')));

$routes->add('restapi.car_list', new Route(constant('URL_SUBFOLDER') . '/rest/car', array('controller' => 'CarController', 'method'=>'getAllCarAsJsonAction')));
$routes->add('restapi.model_list', new Route(constant('URL_SUBFOLDER') . '/rest/model', array('controller' => 'ModelController', 'method'=>'getAllModelAsJsonAction')));
$routes->add('restapi.manufacturer_list', new Route(constant('URL_SUBFOLDER') . '/rest/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'getAllManufacturerAsJsonAction')));

$routePostCar = new Route(constant('URL_SUBFOLDER') . '/rest/car/create', array('controller' => 'CarController', 'method'=>'createNewCar'), array(), array(), '', array(), 'POST');
//var_dump($routePostCar->getMethods());
$routes->add('restapi.car_create',$routePostCar);
