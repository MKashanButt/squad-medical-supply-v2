<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function index(): View{
        Cache::forget("admin_products");
        $products = Cache::rememberForever('admin_products', fn () => Product::paginate(4));
        $users = User::whereHas('account_type', function($q) {
            $q->where('name','admin');
        });
        return view('admin.index', compact('products','users'));
    }
}
