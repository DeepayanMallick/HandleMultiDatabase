<?php

namespace App;

use Illuminate\Http\Request;

class testClass
{
    public static function testData()

    {
        $db = request()->getHttpHost();

        return $db;
    }
}
