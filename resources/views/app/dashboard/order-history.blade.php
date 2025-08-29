@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/order-history.css') }}">
@endpush
<x-app-layout>
    <div class="order-history">
        <h2>Order History
            <div class="header-options">
                <x-a href="/user/cart">
                    <button class="primary bg-green">View Cart</button>
                </x-a>
                <x-a :href="url()->previous()">
                    <button class="primary">Go Back</button>
                </x-a>
            </div>
        </h2>
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
                        <button class="{{ getOrderStatusColor($order->status) }}">{{ $order->status }}</button>
                    </div>
                </div>
            @empty
                <p>You Dont Have any On Going Orders</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
