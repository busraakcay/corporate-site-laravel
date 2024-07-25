<?php

namespace App\Http\Controllers\UserPanel;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::get();
        $products = Product::limit(8)->orderBy('id', 'desc')->get();
        return view('user.home.index', compact('news', 'products'));
    }

    public function aboutUs()
    {
        return view('user.aboutUs.index');
    }

    public function contactUs()
    {
        return view('user.contactUs.index');
    }

    public function products()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('user.products.index', compact("products"));
    }

    public function productDetail(Request $request)
    {
        $id = $request->query('id');
        $product = Product::where('id', $id)->first();
        $products = Product::whereNotIn('id', [$id])->get();
        return view('user.productDetail.index', compact('product', 'products'));
    }
}
