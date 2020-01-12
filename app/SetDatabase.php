<?php

namespace App;

use Illuminate\Http\Request;

class SetDatabase
{

    public static function dbSetup()

    {

        // $db = request()->getHttpHost();

        // $db = $this->host_name;



        $dbs = array(

            'db1' => array(
                'database' => 'test_db1',
                'username' => 'root',
                'password' => '',

            ),
            'db2' => array(
                'database' => 'test_db2',
                'username' => 'root',
                'password' => '',

            ),
            'db3' => array(
                'database' => 'test_db3',
                'username' => 'root',
                'password' => '',

            ),

        );


        $db = "127.0.0.1:8000";

        switch ($db) {

            case "127.0.0.1:8000":
                return $dbs['db1'];
                break;

            case "127.0.0.1:8001":
                return $dbs['db2'];
                break;

            case "127.0.0.1:8003":
                return $dbs['db3'];
                break;

            default:
                return $dbs['db1'];
                break;
        }
    }
}
