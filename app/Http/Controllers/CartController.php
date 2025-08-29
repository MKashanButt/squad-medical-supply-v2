<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function store(string $id): RedirectResponse
    {
        $validated = Product::where("id", $id)->exists();

        if ($validated) {
            Cart::create([
                "product_id" => $id,
                "user_id" => Auth::user()->id,
            ]);
            Cache::forget("user_cart_" . Auth::id());
            return redirect()->back()->with("success", "Added To Cart");
        } else {
            return redirect()->back()->with("danger", "An Error Occured, Please try again later");
        }
    }

    public function clear(): RedirectResponse
    {
        Cart::where("user_id", Auth::id())->delete();
        Cache::forget("user_cart_" . Auth::id());
        return redirect()->back()->with("success", "Cart Cleared");
    }
    public function destroy(string $id): RedirectResponse
    {
        $validated = Cart::where("id", $id)
            ->orWhere('user_id', Auth::id())->exists();

        if ($validated) {
            Cart::where('id', $id)->delete();
            Cache::forget("user_cart_" . Auth::id());
            return redirect()->back()->with("success", "Product Deleted from Cart");
        } else {
            return redirect()->back()->with("danger", "An Error Occured, Please try again later");
        }
    }
}
