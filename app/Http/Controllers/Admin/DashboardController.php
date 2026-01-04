<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\StockLog;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalUsers'      => User::count(),
            'totalCategories' => Category::count(),
            'totalProducts'   => Product::count(),
            'totalStockLogs'  => StockLog::count(),
        ]);
    }
}
