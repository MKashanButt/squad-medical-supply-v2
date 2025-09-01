@push('css')
    <link rel="stylesheet" href="{{asset('css/admin/index.css')}}">
@endpush
<x-admin-layout>
    <div class="product-list">
        <h1>Product List
            <div class="header-options">
                <x-a :href="route('admin.create')">
                    <button class="primary bg-green">Add Product</button>
                </x-a>
                <x-a :href="route('admin.clearList')">
                    <button class="primary bg-red">Clear Product List</button>
                </x-a>
            </div>
        </h1>
        <div class="stage">
            @forelse ($products as $key => $product)
                <div class="item" key={{ $key }}>
                    <x-image :src="'storage/' . $product['thumbnail']" alt="" />
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['description'] }}</p>
                    <h4>Key Benefits:</h4>
                    <ul>
                        @foreach (explode(',', $product['key_benefits']) as $key => $benefit)
                            <li key={{ $key }}>{{ ucwords($benefit) }}</li>
                        @endforeach
                    </ul>
                    <div class="header-options">
                        <x-a :href="route('admin.edit', $product['id'])">
                            <button class="primary">Edit</button>
                        </x-a>
                        <x-a :href="route('admin.destroy', $product['id'])">
                            <button class="primary bg-red">Delete</button>
                        </x-a>
                    </div>
                </div>
            @empty
                <p>No Products Available</p>
            @endforelse
        </div>
        <p>{{$products->links('pagination.default')}}</p>
    </div>
</x-admin-layout>