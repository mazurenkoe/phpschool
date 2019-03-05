<?php

namespace  App\Controllers;

class Connection{

    public static function connect()
    {
        $config = Config::get('db');


        $dns = sprintf('mysql:host=$;dbname=$', $config['host'], $config['database']);

        $connection = new \PDO($dns, $config['username'], $config['password']);
        pd($connection);
    }

}
