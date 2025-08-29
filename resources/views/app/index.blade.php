@php
    $data = App\Models\Product::select('thumbnail', 'name', 'description')->limit(4)->get();
@endphp
@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/components/productSlider.css') }}" />
    <style>
        .stats .item .container {
            width: auto !important;
        }
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* .swiper .swiper-slide img{width:100%;height:100%}.swiper-slide{text-align:center;font-size:18px;background:#444;display:flex;justify-content:center;align-items:center}.swiper-slide img{display:block;object-fit:cover} */
    </style>
@endpush
@push('js')
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            navigation: {
                prevEl: '.swiper-button-prev',
                nextEl: '.swiper-button-next',
            },
            slidesPerView: 1,
            autoplay: true,
            loop: true
        });
    </script>
@endpush
<x-app-layout>
    <main>
        <section class="hero">
            <div class="swiper overlaySlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slideOne slide">
                            <x-image src='images/hero-slider-one.avif' alt="" class="image" />
                    </div>
                    <div class="swiper-slide slide">
                        <x-image src="images/hero-slider-two.avif" alt="" class="image" />
                    </div>
                    <div class="swiper-slide slideLast slide">
                        <x-image src="images/hero-slider-three.avif" alt="" class="image" />
                    </div>
                </div>
                <div class="customNavigation">
                    <button class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="10" d="M328 112L184 256l144 144" />
                        </svg>
                    </button>
                    <button class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="10" d="M184 112l144 144-144 144" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <section class="whatWeDo container">
            <div class="head">
                <div class="headings">
                    <span>Squad Medical Supplies</span>
                    <h2>What We Do</h2>
                </div>
                <div class="content">
                    <p>
                        We are a dedicated DME company which provides disposable medical
                        products and durable equipment having a broad product catalog
                        comprising: incontinence, ostomy, urological, wound care, and
                        diabetes supplies, all delivered conveniently and discreetly to
                        the patient's home.
                    </p>
                    <x-a href="/about">
                        <button>About Us</button>
                    </x-a>
                </div>
            </div>
            <div class="stage">
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
                    <h3>Great Customer Service</h3>
                    <p>
                        Making your life easier and more enjoyable. The experienced staff
                        of Sunshine Medical are committed to enhancing the quality of life
                        of those we serve our patients!
                    </p>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path
                            d="M256.32 126.24l-120.16 78.25 120.16 78.24L136.16 361 16 282.08l120.16-78.24L16 126.24 136.16 48zm-120.8 259.52l120.16-78.25 120.16 78.25L255.68 464zm120.8-103.68l120.16-78.24-120.16-77.6L375.84 48 496 126.24l-120.16 78.25L496 282.73 375.84 361z" />
                    </svg>
                    <h3>Free Sample Program</h3>
                    <p>
                        NOT SURE which size or style sample to order? Call our toll-free
                        number today 1-888-504-4956 to request your free sample, delivered
                        in a discreet package to your home.
                    </p>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M48 80h64l48 272h256" />
                        <path d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <h3>Fast Delivery Process</h3>
                    <p>
                        Delivery frame time 24 to 72 hours after receiving Authorization.
                        One Stop Medical Store straight to the patient's home.
                    </p>
                </div>
            </div>
        </section>
        <x-product-slider :heading="'Trending Products'" :data="$data" />
        <section class="stats">
            <span>At Squad Medical Supplies</span>
            <h2>Our Stats</h2>
            <hr />
            <p>Speak for themselves</p>
            <div class="stage container" id="stats">
                <div class="item">
                    <div class="container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <rect x="32" y="112" width="448" height="352" rx="48" ry="48"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <path d="M144 112V80a32 32 0 0132-32h160a32 32 0 0132 32v32M256 208v160M336 288H176"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                        <h3 id="patientNumber">0</h3>
                        <p>
                            Patients SATISFIED with our family service and caring for over
                            10 years
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M376 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                            <path
                                d="M288 304c-87 0-175.3 48-191.64 138.6-2 10.92 4.21 21.4 15.65 21.4H464c11.44 0 17.62-10.48 15.65-21.4C463.3 352 375 304 288 304z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="32" d="M88 176v112M144 232H32" />
                        </svg>
                        <h3 id="experienceNumber">0</h3>
                        <p>Years of EXPERIENCE Combined in the healthcare industry</p>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path
                                d="M313.27 124.64L198.73 51.36a32 32 0 00-29.28.35L56.51 127.49A16 16 0 0048 141.63v295.8a16 16 0 0023.49 14.14l97.82-63.79a32 32 0 0129.5-.24l111.86 73a32 32 0 0029.27-.11l115.43-75.94a16 16 0 008.63-14.2V74.57a16 16 0 00-23.49-14.14l-98 63.86a32 32 0 01-29.24.35zM328 128v336M184 48v336"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                        <h3 id="statesNumber">0</h3>
                        <p>
                            STATES Business presence: Florida, North & South Carolina,
                            Texas, New Jersey
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="aboutUs container" id="aboutUs">
            <div class="image">
                <x-image src="images/about-us.avif" alt="" />
            </div>
            <div class="content">
                <h2>About Us</h2>
                <p>
                    Our goal at Squad Medical Supplies is to make your life and the
                    lives of those you care easier, healthier, and more comfortable. We
                    are here to offer specialized solutions that support independence
                    and well-being because we recognize the special needs of seniors. We
                    are committed to helping you at every stage of your path to better
                    living, whether that means providing you with knowledgeable advice
                    on insurance and health plans or kind caregivers who treat you like
                    family.
                </p>
                <p>
                    We are proud to provide a wide selection of Durable Medical
                    Equipment (DME) that is intended to improve your quality of life.
                    Our products, which range from wheelchairs and lymphedema pump
                    massagers to knee braces and CGM monitors, are carefully chosen for
                    their dependability and efficacy. Squad Medical Supplies makes
                    certain that each item satisfies your particular requirements,
                    delivering ease, security, and tranquility.
                </p>
                <p>
                    Our first priorities are your well-being and health. For this
                    reason, we're dedicated to providing individualized care, open
                    guidance, and continuous assistance. You are a member of our family
                    when you work with Squad Medical Supplies, not just a client. Allow
                    us to support you in living with grace, comfort, and the assurance
                    that you have a reliable team on your side.
                </p>
                <button>
                    <x-a href="tel:+14044422019">Contact Us at +1 (404) 442-2019</x-a>
                </button>
            </div>
        </section>
        <section class="insurances container">
            <h2>Insurances We Accept</h2>
            <p>Know if you are covered by our ever growing list of Health Plans</p>
            <div class="stage">
                <div class="item">
                    <x-image src="images/wellcare-insurance.avif" alt="wellcare-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/humana-insurance.avif" alt="humana-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/aetna-insurance.avif" alt="aetna-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/cigna-insurance.avif" alt="cigna-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/uhc-insurance.avif" alt="uhc-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/bcbs-insurance.avif" alt="bcbs-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/clover-insurance.avif" alt="clover-insurance-logo" />
                </div>
                <div class="item">
                    <x-image src="images/medicare-insurance.avif" alt="medicare-insurance-logo" class="molinaLogo" />
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="overlay"></div>
            <div class="container container">
                <div class="content">
                    <h2>Need Help?</h2>
                    <p>Get in touch now and get free consultation</p>
                </div>
                <button class="primary">
                    <x-a href="tel:+14044422019">+1 (404) 442-2019</x-a>
                </button>
            </div>
        </section>
        {{-- <PopupForm id="braces" onClose={()=> closeDialog("braces")} /> --}}
    </main>
</x-app-layout>
