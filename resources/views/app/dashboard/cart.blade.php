@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/cart.css') }}">
@endpush
<x-app-layout>
    <div class="cart">
        <h2>Cart
            <div class="header-options">
                <x-a href="/dme-equipments">
                    <button class="primary">View Products</button>
                </x-a>
                <x-a :href="route('user.cart.clear')">
                    <button class="danger">Clear Cart</button>
                </x-a>
            </div>
        </h2>
        <div class="stage">
            @forelse ($cart as $item)
                <div class="item">
                    <x-image :src="$item->product->thumbnail" :alt="$item->product->name . ' image'" />
                    <div class="content">
                        <h3>{{ $item->product->name }}</h3>
                        <p>{{ $item->product->description }}</p>
                        <div class="product-footer">
                            <x-a :href="route('order.create', $item->product->id)">
                                <button class="primary">Proceed Order</button>
                            </x-a>
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
</x-app-layout>