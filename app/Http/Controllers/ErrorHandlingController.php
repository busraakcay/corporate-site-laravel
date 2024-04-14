<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlingController extends Controller
{
    public function dbException()
    {
        return view('errors.2002');
    }
}
