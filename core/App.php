<?php
namespace core;
Class App{

    protected static $data =[
        // 'config'=>[
        //     "database"=>[
        //         "username"=> "root",
        //         "password"=> "",
        //         "dbname"=> "todo",
        //         "host"=>"mysql:host=localhost"
        //     ]
        // ]
    ];
    public static function bind($key, $value){
        static::$data[$key] = $value;
    }

    public static function get($key){
        return static::$data[$key];
    }
}