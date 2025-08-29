@push('css')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endpush
<x-app-layout>
    <main>
        <form action="{{ route('order.store', $product['id']) }}">
            <div class="product-showcase">
                <x-image :src="$product['thumbnail']" :alt="$product['name']" />
                <h2>{{ $product['name'] }}</h2>
                <p>{{ $product['description'] }}</p>
                <p><b>Amount:</b> <input type="number" name="amount_count" id="amount_count" value="1" min="1"></p>
            </div>
            <div class="checkout-fields">
                <h1>Placing Order for {{ $product['name'] }}</h1>
                @csrf
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
                <label for="city">City</label>
                <input type="text" name="city" id="city" required>
                <label for="state">State</label>
                <input type="text" name="state" id="state" required>
                <label for="country">Country</label>
                <select name="country_id" id="country" required>
                    <option value="" selected>Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                    @endforeach
                </select>
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" id="zip_code" required>
                <div class="radio-container">
                    <input type="radio" checked name="payment_method" id="payment_method" required readonly>
                    <label for="payment_method">Cash On Delivery (COD)</label>
                </div>
                <button class="primary bg-green">Proceed</button>
            </div>
        </form>
    </main>
</x-app-layout>
