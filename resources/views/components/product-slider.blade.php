@push('js')
    <script>
        const swiper2 = new Swiper('.swiper-2', {
            navigation: true,
            autoplay: true,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            }
        });
    </script>
@endpush
<section class="products">
    <h2>{{ $heading }}</h2>
    <div class="swiper-2 overlaySlider">
        <div class="swiper-wrapper stage">
            @foreach ($data as $key => $item)
                <div key={{ $key }} class="item">
                    <div class="image">
                        <x-image :src="$item['thumbnail']" :alt="$item['name']" />
                    </div>
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
