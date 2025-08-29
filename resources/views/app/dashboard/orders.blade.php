@php
    function getOrderStatusColor(string $status): string
    {
        $color = 'primary';
        switch ($status) {
            case 'returned':
                $color = $color . ' bg-red';
                break;
            case 'delivered':
                $color = $color . ' bg-green';
                break;
            case 'awaiting delivery':
                $color = $color . ' bg-orange';
                break;
        }

        return $color;
    }
@endphp
@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/orders.css') }}">
@endpush
<x-app-layout>
    <div class="orders">
        <h2>Orders
            <div class="header-options">
                <x-a href="/user/cart">
                    <button class="primary bg-green">View Cart</button>
                </x-a>
                <x-a href="/user/order-history">
                    <button class="primary">Order History</button>
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
                        <button class="{{ getOrderStatusColor($order->status) }}">{{ ucwords($order->status) }}</button>
                    </div>
                </div>
            @empty
                <p>You Dont Have any On Going Orders</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
