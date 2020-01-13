<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class TestClass
{
    public static function testData()

    {
        // $db_list = config('dbList');
        $db_list = Config::get('dbList');

        return $db_list;
    }
}
