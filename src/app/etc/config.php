<?php
// configuration with app and database details
namespace MyApp\Config;

class config{

    function demo()
    {
        return[
            'app'=>[
                'name'=>'My App',
                'version'=>'1.0'
            ],
            'db'=>[
                    'host'     => 'mysql-server',
                    'username' => 'root',
                    'password' => 'secret',
                    'dbname'   => 'phalt',
            ],
            'db1'=>[
                    'host'     => 'mysql-server',
                    'username' => 'root',
                    'password' => 'secret',
                    'dbname'   => 'phalt',
            ]
        ];
    }
}


