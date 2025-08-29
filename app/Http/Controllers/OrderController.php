<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function create(string $productId): View
    {
        $countries = Country::select('id', 'name')->get();
        $product = Product::where('id', $productId)
            ->select('id', 'thumbnail', 'name', 'description')
            ->first();

        return view('app.checkout', compact('product', 'countries'));
    }

    public function store(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'amount_count' => ['required', 'min:1', 'integer'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'country_id' => ['required', 'integer'],
            'zip_code' => ['required', 'integer'],
        ]);

        Order::create([
            ...$validated,
            'product_id' => $id,
            'status' => 'awaiting delivery',
        ]);

        return redirect()->route('app.products');
    }
}
