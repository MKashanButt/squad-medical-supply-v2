@php
    $data = [
        [
            'id' => 1,
            'name' => 'Emily Harrison',
            'description' =>
                'The TENS unit I purchased from Squad Medical Supplies has been a game-changer! It’s easy to use and has significantly reduced my chronic pain. Highly recommend!',
        ],
        [
            'id' => 2,
            'name' => 'John Davis',
            'description' =>
                'The knee brace I ordered fits perfectly and provides excellent support. I feel more confident and pain-free when walking. Great service!',
        ],
        [
            'id' => 3,
            'name' => 'Linda Simmons',
            'description' =>
                'I’ve been using the lymphedema pump massager for a few weeks now, and the results are amazing. My legs feel less swollen, and I feel much more comfortable.',
        ],
        [
            'id' => 4,
            'name' => 'Robert Allen',
            'description' =>
                'The wheelchair I got from Squad Medical Supplies is incredibly durable and comfortable. It’s made a huge difference in my mobility, and I’m so grateful for the excellent service.',
        ],
        [
            'id' => 5,
            'name' => 'Susan Walker',
            'description' =>
                'The caregiver service from Squad Medical Supplies has been exceptional. The staff are compassionate, reliable, and truly care about my mother’s well-being. I couldn’t be happier!',
        ],
    ];

@endphp
<section class="reviews">
    <h2>Latest Reviews</h2>
    <div class="stage">
        @foreach ($data as $key => $item)
            <div class="item" key={{ $key }}>
                <x-image src="images/quotes.avif" alt="quote-icon" class='icon' />
                <span class="avatar">{{ $item['name'][0] }}</span>
                <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
