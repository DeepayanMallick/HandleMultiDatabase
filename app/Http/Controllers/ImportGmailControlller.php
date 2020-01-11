<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportGmailControlller extends Controller
{
    public function index()
    {
        return view('import_gmail_contacts');
    }

    public function import()
    {
        echo "hi";
    }
}
