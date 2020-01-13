<?php

namespace App;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use App\TestClass;



class SetDatabase
{

    protected $host_name;

    protected $db_list;


    public function __construct()
    {
        if (isset($_SERVER['HTTP_HOST'])) {
            $this->host_name = $_SERVER['HTTP_HOST'];
        } else {
            $this->host_name = "127.0.0.1:8000";
        }
    }


    public function dbSetup()

    {

        $db = $this->host_name;

        // $db_list = Config::get('dbList');
        $db_list = "Hello vai maf kore de plz....";

        // return $db_list;

        // die();


        $dbs = array(

            'db1' => array(
                'database' => 'test_db1',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),
            'db2' => array(
                'database' => 'test_db2',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),
            'db3' => array(
                'database' => 'test_db3',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),

        );

        switch ($db) {

            case "127.0.0.1:8000":
                return $dbs['db1'];
                break;

            case "127.0.0.1:8001":
                return $dbs['db2'];
                break;

            case "127.0.0.1:8002":
                return $dbs['db3'];
                break;

            default:
                return $dbs['db1'];
                break;
        }
    }
}
