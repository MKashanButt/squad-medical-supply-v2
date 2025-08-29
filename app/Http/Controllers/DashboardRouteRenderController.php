<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class DashboardRouteRenderController extends Controller
{
    protected $cart;
    protected $awaitingOrders;
    protected $orders;
    public function __construct()
    {
        $this->cart = Cache::rememberForever('user_cart_' . Auth::id(), fn() => Cart::with('product')->where("user_id", Auth::id())->orderBy("created_at", "desc")->limit(10)->get());
        $this->orders = Cache::rememberForever('user_order_' . Auth::id(), fn() => Order::with('product')->where("user_id", Auth::id())->orderBy("created_at", "desc")->limit(10)->get());
        $this->awaitingOrders = Cache::rememberForever('user_awaiting_orders_' . Auth::id(), fn() => Order::where('status', 'awaiting delivery')
            ->orWhere('user_id', Auth::id())
            ->limit(4)
            ->get());
    }
    public function index(): View
    {
        return view('app.dashboard.index', [
            'cart' => $this->cart->take(4),
            'orders' => $this->orders->take(4),
        ]);
    }
    public function cart(): View
    {
        return view('app.dashboard.cart', [
            'cart' => $this->cart,
        ]);
    }
    public function orders(): View
    {
        return view('app.dashboard.orders', [
            'orders' => $this->awaitingOrders,
        ]);
    }
    public function orderHistory(): View
    {
        return view('app.dashboard.order-history', [
            'orders' => $this->orders,
        ]);
    }
}
