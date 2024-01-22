<?php
namespace controllers;
use core\App;

class PagesController
{
    public function home()
    {
        $users = App::get("database")->getAll("users");

        view('index', ['users' => $users]); //require "views/index.view.php";
    }

    public function about()
    {
        view("about");
    }

    public function contact()
    {
        view("contact");
    }

    public function order()
    {
        view("order");
    }

    public function createuser(){
        App::get("database")->insert([
            'name'=> request('name'),
        ], "users");
        
       redirect("/");
    }
}
