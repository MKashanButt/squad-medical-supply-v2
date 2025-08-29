@php
    $filteredBlogs = [
        [
            'id' => 1,
            'image' => 'images/2025-medicare-policy-hero.avif',
            'title' => 'How the 2025 Medicare Policy Changes Impact Your Access to Medical Supplies',
            'content' =>
                "Medicare's rules are always changing to accommodate patients' increasing demands and increase access to healthcare in general. Beneficiaries' access to durable medical equipment (DME) will be directly impacted by the major changes introduced in the 2025 revisions. These upgrades include enhanced access to certain equipment types, new invoicing practices, and updated coverage criteria....",
            'tags' => '',
            'link' => '/blogs/2025-medicare-policy-changes',
        ],
        [
            'id' => 2,
            'image' => 'images/cgm-hero.avif',
            'title' => 'The Advantages of Continuous Glucose Monitoring: What Medicare Will Cover in 2025',
            'content' =>
                'Continuous glucose monitors (CGMs) are now a crucial component of the toolset needed to properly manage diabetes. Medicare has increased its coverage for CGMs in response to the rising prevalence of diabetes in the US, giving patients more access. Patients may more easily purchase and utilize CGMs in 2025 because to these regulatory improvements, which also make it simpler for them....',
            'tags' => '',
            'link' => '/blogs/continuous-glucose-monitoring',
        ],
        [
            'id' => 3,
            'image' => 'assets/images/covid-hero.avif',
            'title' => 'Navigating COVID-19: Tips, Updates, and Resources for Your Health and Safety',
            'content' =>
                'Globally, the COVID-19 epidemic has changed day-to-day living. It has emphasized the value of teamwork, improvements in healthcare, and access to trustworthy information since it began in late 2019. This blog offers crucial information and practical advice to enable you to handle these extraordinary times with fortitude and well-informed care....',
            'tags' => '',
            'link' => '/blogs/covid-19',
        ],
        [
            'id' => 4,
            'image' => 'images/medical-equipment-hero.avif',
            'title' => "Medicare's Top Durable Medical Devices for 2025",
            'content' =>
                'Healthcare is changing quickly, and in-home medical equipment (DME) is a key component of this change. The way people access and utilize medical equipment in their homes will be completely transformed by 2025 due to changes in Medicare laws, technological improvements, and a greater focus on patient-centered care....',
            'tags' => '',
            'link' => '/blogs/medical-devices-2025',
        ],
    ];
@endphp
@push('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
@endpush
<x-app-layout>
    <main>
        <section class="hero">
            <x-image src="images/blog-hero.avif" alt="" />
            <div class="content">
                <h1>Discover Fresh Insights</h1>
                <hr />
                <p>Discover a multitude of information, perspectives, and advice on a range of subjects that are most
                    important to you. In order to keep you informed and motivated, we provide the newest trends,
                    professional guidance, and useful resources on our blog.</p>
                <p>Explore in-depth articles written by experts, useful advice, and stimulating conversations. Our blog
                    provides articles designed to keep you ahead of the curve, whether your goal is to remain current on
                    industry news or discover answers to common problems. Come go on an educational and exploratory trip
                    with us!</p>
                <x-a href="#blogs">
                    <button>Discover</button>
                </x-a>
            </div>
        </section>
        <div class="blogs" id='blogs'>
            <form action="">
                <input type="search" name="blogSearch" id="blogSearch" placeholder='Search For Blogs' />
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </form>
            <div class="stage">
                @forelse ($filteredBlogs as $key => $blog)
                    <div class="item" key={{ $key }}>
                        <x-a :href="$blog['link']">
                            <x-image :src="$blog["image"]" :alt="$blog['title']" />
                            <h3>{{ $blog['title'] }}</h3>
                            <p>{{ $blog['content'] }}</p>
                            <div class="tags" key={{ $key }}>
                                @forelse (explode(',', $blog['tags']) as $key => $item)
                                    <button>{{ $item }}</button>
                                @empty
                                    <button>No Tags</button>
                                @endforelse
                            </div>
                        </x-a>
                    </div>
                @empty
                    <p>No Blogs Available</p>
                @endforelse
            </div>
        </div>
    </main>
</x-app-layout>
