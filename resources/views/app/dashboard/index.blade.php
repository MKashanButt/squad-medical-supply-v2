@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/index.css') }}">
@endpush
<x-app-layout>
    <main>
        <h2>Welcome {{ Auth::user()->name }}</h2>
        <div class="orders">
            <h3>Orders <button class="primary">Order Histroy</button></h3>
            <div class="stage">
                @forelse ($orders as $order)
                    <div class="item">
                        <x-image :src="$order->product->thumbnail" :alt="$order->product->name . ' image'" />
                        <div class="content">
                            <h3>{{ $order->product->name }}</h3>
                            <p>{{ $order->product->description }}</p>
                            <p><b>Delivery Address:</b>
                                {{ $order->address . ', ' . $order->city . ', ' . $order->country->name . ', ' . $order->zip_code }}
                            </p>
                            <button class="primary">Awaiting Delivery</button>
                        </div>
                    </div>
                @empty
                    <p>You Dont Have any On Going Orders</p>
                @endforelse
            </div>
        </div>
        <div class="cart">
            <h3>Cart
                <div class="header-options">
                    <x-a href="/dme-equipments">
                        <button class="primary">View Products</button>
                    </x-a>
                    <x-a :href="route('user.cart.clear')">
                        <button class="danger">Clear Cart</button>
                    </x-a>
                </div>
            </h3>
            <div class="stage">
                @forelse ($cart as $item)
                    <div class="item">
                        <x-image :src="$item->product->thumbnail" :alt="$item->product->name . ' image'" />
                        <div class="content">
                            <h3>{{ $item->product->name }}</h3>
                            <p>{{ $item->product->description }}</p>
                            <div class="product-footer">
                                <button class="primary">Proceed Order</button>
                                <x-a :href="route('user.cart.destroy', $item->id)">
                                    <button class="primary bg-red">Delete</button>
                                </x-a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>You Dont Have anything in Cart</p>
                @endforelse
            </div>
        </div>
    </main>
</x-app-layout>