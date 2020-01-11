<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Jobs\SendInvitationEmail;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function import()
    {
        return view('import');
    }

    public function store()
    {
        // $data = Excel::toArray(new UsersImport, request()->file('csvFile'));

        // // dd($data);

        // foreach ($data as $value) {
        //     print_r($value['first_name']);
        // }   

        $user = User::first();
 
        Log::info('Now: ' . $user->name);

        SendInvitationEmail::dispatch($user)
            ->delay(now()->addMinutes(1));



        return back();
    }

    public function testQueue()
    {
        return view('test');
    }
}
