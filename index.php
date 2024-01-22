<?php

require "bootLoader.php";

Router::load('routes.php')
                ->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);

//require "controllers/IndexController.php";