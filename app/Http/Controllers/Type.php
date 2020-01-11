<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type extends Controller
{
    public function dbSetup()

    {

        $db = request()->getHttpHost();


        $dbs = array(

            'db1' => array(
                'database' => 'blog1',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),
            'db2' => array(
                'database' => 'blog2',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),
            'db3' => array(
                'database' => 'blog3',
                'username' => 'debian-sys-maint',
                'password' => 'G0H7Xru852X3zl3a',

            ),

        );

        $db = "127.0.0.1:8001";

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
