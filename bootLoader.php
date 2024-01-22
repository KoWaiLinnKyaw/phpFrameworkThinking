<?php

use core\App;
require "core/functions.php";
require "vendor/autoload.php";
//use core\App;

// require "core/Router.php";
// require "core/Request.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";

App::bind("config", require "core/database/config.php");
// $config = require "core/database/config.php";


App::bind("database", new QueryBuilder(
    Connection::make(App::get("config")['database']))
);

// $database = new QueryBuilder(
//         Connection::make(App::get("config")['database'])
// );


