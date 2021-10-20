<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

$routes->add('car_create', new Route(constant('URL_SUBFOLDER') . '/car/create', array('controller' => 'CarController', 'method'=>'showCreateViewAction')));
$routes->add('car_edit', new Route(constant('URL_SUBFOLDER') . '/car/{id}', array('controller' => 'CarController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('car_list', new Route(constant('URL_SUBFOLDER') . '/car', array('controller' => 'CarController', 'method'=>'showAllAction')));


$routes->add('model_create', new Route(constant('URL_SUBFOLDER') . '/model/create', array('controller' => 'ModelController', 'method'=>'showCreateViewAction')));
$routes->add('model_edit', new Route(constant('URL_SUBFOLDER') . '/model/{id}', array('controller' => 'ModelController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('model_list', new Route(constant('URL_SUBFOLDER') . '/model', array('controller' => 'ModelController', 'method'=>'showAllAction')));

$routes->add('manufacturer_create', new Route(constant('URL_SUBFOLDER') . '/manufacturer/create', array('controller' => 'ManufacturerController', 'method'=>'showCreateViewAction')));
$routes->add('manufacturer_edit', new Route(constant('URL_SUBFOLDER') . '/manufacturer/{id}', array('controller' => 'ManufacturerController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('manufacturer_list', new Route(constant('URL_SUBFOLDER') . '/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'showAllAction')));


$routes->add('restapi.car_list', new Route(constant('URL_SUBFOLDER') . '/rest/car', array('controller' => 'CarController', 'method'=>'getAllCarAsJsonAction'), array(), array(), '', array(), 'GET'));
$routes->add('restapi.car_create',new Route(constant('URL_SUBFOLDER') . '/rest/car', array('controller' => 'CarController', 'method'=>'createNewCar'), array(), array(), '', array(), 'POST'));
$routes->add('restapi.car_update',new Route(constant('URL_SUBFOLDER') . '/rest/car', array('controller' => 'CarController', 'method'=>'updateCar'), array(), array(), '', array(), 'PUT'));
$routes->add('restapi.car_delete',new Route(constant('URL_SUBFOLDER') . '/rest/car/{id}', array('controller' => 'CarController', 'method'=>'deleteCar'), array('id' => '[0-9]+'), array(), '', array(), 'DELETE'));

$routes->add('restapi.manufacturer_list', new Route(constant('URL_SUBFOLDER') . '/rest/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'getAllManufacturerAsJsonAction'), array(), array(), '', array(), 'GET'));
$routes->add('restapi.manufacturer_create',new Route(constant('URL_SUBFOLDER') . '/rest/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'createNewManufacturer'), array(), array(), '', array(), 'POST'));
$routes->add('restapi.manufacturer_update',new Route(constant('URL_SUBFOLDER') . '/rest/manufacturer', array('controller' => 'ManufacturerController', 'method'=>'updateManufacturer'), array(), array(), '', array(), 'PUT'));
$routes->add('restapi.manufacturer_delete',new Route(constant('URL_SUBFOLDER') . '/rest/manufacturer/{id}', array('controller' => 'ManufacturerController', 'method'=>'deleteManufacturer'), array('id' => '[0-9]+'), array(), '', array(), 'DELETE'));

$routes->add('restapi.model_list', new Route(constant('URL_SUBFOLDER') . '/rest/model', array('controller' => 'ModelController', 'method'=>'getAllModelAsJsonAction'), array(), array(), '', array(), 'GET'));
$routes->add('restapi.model_create',new Route(constant('URL_SUBFOLDER') . '/rest/model', array('controller' => 'ModelController', 'method'=>'createNewModel'), array(), array(), '', array(), 'POST'));
$routes->add('restapi.model_update',new Route(constant('URL_SUBFOLDER') . '/rest/model', array('controller' => 'ModelController', 'method'=>'updateModel'), array(), array(), '', array(), 'PUT'));
$routes->add('restapi.model_delete',new Route(constant('URL_SUBFOLDER') . '/rest/model/{id}', array('controller' => 'ModelController', 'method'=>'deleteModel'), array('id' => '[0-9]+'), array(), '', array(), 'DELETE'));
