<?php
// src/app.php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
//$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
//$routes->add('bye', new Routing\Route('/bye'));
//$routes->add('index', new Routing\Route('/', array(
//    '_controller' => 'DemoController::index'
//)));
return $routes;
