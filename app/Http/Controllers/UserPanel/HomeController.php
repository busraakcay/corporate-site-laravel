<?php

namespace App\Http\Controllers\UserPanel;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::get();
        $products = Product::limit(8)->orderBy('id', 'desc')->get();
        return view('user.home.index', compact('news', 'products'));
    }
}
