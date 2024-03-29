<?php

//die_dump function
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function view($name, $dbArray = [])
{
    extract($dbArray);
    return require "views/$name.view.php";
}

function redirect($uri)
{
    header("location: $uri");
}

function request($name)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return $_POST[$name];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
       return $_GET[$name];
    }
}
