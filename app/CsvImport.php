<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvImport extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'telephone', 'company'];
}
