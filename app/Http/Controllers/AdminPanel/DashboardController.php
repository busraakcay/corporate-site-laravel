<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::withoutGlobalScopes()
            ->orderBy("id", "asc")
            ->limit(10)->get();
        return view('admin.dashboard.index', compact('products'));
    }
}
