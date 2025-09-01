@php
    $uniqueTags = [];
@endphp
<x-app-layout>
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/products.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/reviews.css') }}">
    @endpush
    <main>
        <section class="hero">
            <div class="content">
                <h1>Empowering Lives with Trusted Care Solutions</h1>
                <p>
                    Discover a wide range of products designed to support your health,
                    comfort, and independence. At Squad Medical Supplies, we carefully
                    select premium DME products tailored to meet your unique needs. From
                    mobility aids to advanced monitoring devices, every item reflects
                    our commitment to enhancing your quality of life with care you can
                    trust.
                </p>
            </div>
            <x-image src="images/doctor-group.png" alt="group of doctors" />
        </section>
        <form action="" class="searchForm">
            <input type="search" name="productSearch" id="productSearch" value="" />
            <button type="button">
                <x-a href="#products">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="currentColor"
                            stroke-miterlimit="10" stroke-width="32" />
                        <path d="M232 160a72 72 0 1072 72 72 72 0 00-72-72z" fill="none" stroke="currentColor"
                            stroke-miterlimit="10" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="32" d="M283.64 283.64L336 336" />
                    </svg>
                </x-a>
            </button>
        </form>
        <section class="promotion container">
            <div class="item">
                <div class="overlay"></div>
                <div class="content">
                    <span>Pump</span>
                    <h3>Enhance Comfort with Lymphedema Pumps!</h3>
                    <p>
                        Experience relief and comfort with our trusted lymphedema pump
                        massagers—designed for your well-being.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <div class="content">
                    <span>Braces</span>
                    <h3>Support Your Movement with Premium Braces!</h3>
                    <p>
                        Find the perfect brace for enhanced stability and comfort,
                        designed to support your active lifestyle.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <div class="content">
                    <span>Mobility</span>
                    <h3>Gain Independence with Our Mobility Aids!</h3>
                    <p>
                        Explore our range of wheelchairs and mobility solutions for
                        effortless movement and ultimate freedom.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <div class="content">
                    <span>Tens Unit</span>
                    <h3>Relieve Pain with Our TENS Units!</h3>
                    <p>
                        Experience effective pain relief and muscle relaxation with our
                        advanced TENS units, designed for comfort.
                    </p>
                </div>
            </div>
        </section>
        <ProductSlider :heading="'Trending Products'" :data="$data" />
        <section class="info">
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                    <path
                        d="M448 341.37V170.61A32 32 0 00432.11 143l-152-88.46a47.94 47.94 0 00-48.24 0L79.89 143A32 32 0 0064 170.61v170.76A32 32 0 0079.89 369l152 88.46a48 48 0 0048.24 0l152-88.46A32 32 0 00448 341.37z"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M69 153.99l187 110 187-110M256 463.99v-200" />
                </svg>
                <div class="content">
                    <h3>Free Delivery</h3>
                    <p>Order over $120</p>
                </div>
            </div>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                    <rect x="32" y="80" width="448" height="256" rx="16" ry="16" transform="rotate(180 256 208)"
                        fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M64 384h384M96 432h320" />
                    <circle cx="256" cy="208" r="80" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="32" />
                    <path
                        d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" />
                </svg>
                <div class="content">
                    <h3>Get Refund</h3>
                    <p>Within 30 Days Return</p>
                </div>
            </div>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                    <rect x="48" y="144" width="416" height="288" rx="48" ry="48" fill="none" stroke="currentColor"
                        stroke-linejoin="round" stroke-width="32" />
                    <path d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49" fill="none"
                        stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <path d="M368 320a32 32 0 1132-32 32 32 0 01-32 32z" />
                </svg>
                <div class="content">
                    <h3>Safe Payment</h3>
                    <p>100% Secure Payments</p>
                </div>
            </div>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                    <path
                        d="M83 384c-13-33-35-93.37-35-128C48 141.12 149.33 48 256 48s208 93.12 208 208c0 34.63-23 97-35 128"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" />
                    <path
                        d="M108.39 270.13l-13.69 8h0c-30.23 17.7-31.7 72.41-3.38 122.2s75.87 75.81 106.1 58.12h0l13.69-8a16.16 16.16 0 005.78-21.87L130 276a15.74 15.74 0 00-21.61-5.87zM403.61 270.13l13.69 8h0c30.23 17.69 31.74 72.4 3.38 122.19s-75.87 75.81-106.1 58.12h0l-13.69-8a16.16 16.16 0 01-5.78-21.87L382 276a15.74 15.74 0 0121.61-5.87z"
                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                </svg>
                <div class="content">
                    <h3>24/7 Customer Service</h3>
                    <p>Always Available Support</p>
                </div>
            </div>
        </section>
        <section class="products container">
            <div class="stage" id="products">
                @foreach ($products as $key => $product)
                    <div class="item" key={{ $key }}>
                        <x-image :src="$product['thumbnail']" alt="" />
                        <h3>{{ $product['name'] }}</h3>
                        <h4>Key Benefits:</h4>
                        <ul>
                            @foreach (explode(',', $product['key_benefits']) as $key => $benefit)
                                <li key={{ $key }}>{{ $benefit }}</li>
                            @endforeach
                        </ul>
                        @if (Auth::check())
                            <div class="product-footer">
                                <x-a :href="route('user.cart.store', $product['id'])">
                                    <button class="primary">Add To Cart</button>
                                </x-a>
                                <x-a :href="route('order.create', $product['id'])">
                                    <button class="primary bg-green">Order</button>
                                </x-a>
                            </div>
                        @else
                            <x-a href="/login-register">
                                <button>Login</button>
                            </x-a>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="filters">
                <form action="" method="GET">
                    <h2>Search:</h2>
                    <div class="search">
                        <input type="search" name="fitlerSearch" id="filterSearch" value={searchTerm} />
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                                <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none"
                                    stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path d="M232 160a72 72 0 1072 72 72 72 0 00-72-72z" fill="none" stroke="currentColor"
                                    stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M283.64 283.64L336 336" />
                            </svg>
                        </button>
                    </div>
                    <h2>Tags:</h2>
                    <div class="tags">
                        @foreach ($uniqueTags as $key => $tags)
                            <button key={{ $key }} type="button">
                                {{ $tag }}
                            </button>
                        @endforeach
                    </div>
                </form>
            </div>
        </section>
        <x-reviews />
    </main>
</x-app-layout>