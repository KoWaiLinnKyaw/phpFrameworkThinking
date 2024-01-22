<?php

use controllers\PagesController;

// $router->get("", "PagesController@home");
// $router->get("about", "PagesController@about");
// $router->get("contact", "PagesController@contact");
// $router->get("orders", "PagesController@order");
// $router->post("names", "PagesController@createuser");

// $router->get("users", "UserController@index");

$router->get('', [PagesController::class, 'home']);
