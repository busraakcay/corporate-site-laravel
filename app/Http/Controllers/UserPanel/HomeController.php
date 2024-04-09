<?php

namespace App\Http\Controllers\UserPanel;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
