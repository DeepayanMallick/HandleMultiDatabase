<?php

namespace App\Http\Controllers;

use App\testClass;
use App\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // $test = testClass::testData();

        // dd($test); 

        // $db_list = config('db_list.1270018000');

        // dd($db_list);

        $users = User::get();
        $data['users'] = $users;
        return view('home', $data);
    }
}
