<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DMEEquipmentController extends Controller
{
    public function index(): View
    {
        $products = Product::select('id', 'thumbnail', 'name', 'key_benefits')
            ->get()
            ->toArray();
        return view("app.dme-equipments", compact("products"));
    }
}
