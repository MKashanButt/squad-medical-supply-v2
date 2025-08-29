@push('css')
    <link rel="stylesheet" href="{{ asset('css/caregivers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/reviews.css') }}">
@endpush
<x-app-layout>
    <main>
        <section class="hero">
            <x-image src="images/caregivers-hero.avif" alt="caregivers-hero" />
            <div class="overlay"></div>
            <div class="content">
                <span>Service</span>
                <h1>Individualized Home Care</h1>
                <p>At Squad Medical Supplies, we offer qualified caregivers that provide people with individualized,
                    compassionate care in the convenience of their own homes. Whether it's help with everyday tasks
                    or
                    specialist care for medical needs, our caregivers are committed to making sure your loved ones
                    have
                    the
                    support they need to live a comfortable and independent life.</p>
            </div>
        </section>
        <section class="whyGetDmeServies container">
            <div class="content">
                <h2>
                    <hr />Why Get a Caregiver to Help You Around the House?
                </h2>
                <p>We at Squad Medical Supplies are proud to provide competent, caring caregivers who offer
                    individualized
                    care in the convenience of your own home. Our caregivers are committed to making sure you or
                    your
                    loved
                    ones get the help they require to continue living a high-quality life.</p>
                <p>Our caregivers are prepared to provide outstanding care that is customized to meet your needs,
                    whether
                    you need assistance with everyday tasks or more specific medical attention. We ensure that you
                    can
                    live
                    freely and with peace of mind by emphasizing comfort and dignity.</p>
                <div class="stage">
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M256 176v160M336 256H176" />
                        </svg>
                        <h3>Cost-Effective In-Home Care</h3>
                        <p>In-home caregiving services are sometimes less expensive than assisted living facilities
                            and
                            offer professional care without the hassle of leaving your cozy surroundings.</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M256 176v160M336 256H176" />
                        </svg>
                        <h3>Relief for Family Members</h3>
                        <p>Caregivers lessen the load on family members, allowing them to focus on spending time
                            with
                            their
                            loved ones instead of taking care of caregiving responsibilities.</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M256 176v160M336 256H176" />
                        </svg>
                        <h3>At-Home Physiotherapy Support</h3>
                        <p>Our trained caregivers help with physical therapy exercises, mobility management,
                            building
                            physical strength, and aiding in the healing process from injuries at your home.</p>
                    </div>
                </div>
            </div>
            <div class="image">
                <x-image src="images/whyGetCaregiver.avif" alt="" />
            </div>
        </section>
        <section class="chossingSquadMedSupplies">
            <h2>Choosing Squad Medical Supplies</h2>
            <div class="stage">
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
                        <rect x="32" y="80" width="448" height="256" rx="16" ry="16"
                            transform="rotate(180 256 208)" fill="none" stroke="currentColor" stroke-linejoin="round"
                            stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M64 384h384M96 432h320" />
                        <circle cx="256" cy="208" r="80" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
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
                        <rect x="48" y="144" width="416" height="288" rx="48" ry="48"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
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
            </div>
        </section>
        <section class="someKeyBenefits container">
            <div class="image">
                <x-image src="images/whychooseus.avif" alt="why-choose-us" />
            </div>
            <div class="content">
                <h2>
                    <hr />A Few Advantages
                </h2>
                <p>At Squad Medical Supplies, we offer compassionate and skilled caregivers who provide personalized
                    care at
                    home. Our caregivers are dedicated to ensuring that you or your loved ones receive the necessary
                    support
                    for comfortable living, whether it’s assistance with daily tasks or specialized medical care.
                </p>
                <p>We understand the importance of dignity and independence, and our caregivers are trained to meet
                    your
                    specific needs. Whether you require help with personal care, medication management, or
                    companionship, we
                    ensure a tailored approach to improve overall well-being and quality of life.</p>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M368 192L256.13 320l-47.95-48M191.95 320L144 272M305.71 192l-51.55 59" />
                        </svg>
                        Personalized Care for Your Loved Ones
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M368 192L256.13 320l-47.95-48M191.95 320L144 272M305.71 192l-51.55 59" />
                        </svg>
                        Improve Comfort and Independence at Home
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M368 192L256.13 320l-47.95-48M191.95 320L144 272M305.71 192l-51.55 59" />
                        </svg>
                        Experienced and Compassionate Caregivers
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                fill="none" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M368 192L256.13 320l-47.95-48M191.95 320L144 272M305.71 192l-51.55 59" />
                        </svg>
                        Affordable Care with Insurance Support
                    </li>
                </ul>
            </div>
        </section>
        <section class="cta">
            <x-image src="images/caregivers-cta.avif" alt="caregivers-cta-image" />
            <div class='overlay'></div>
            <span>Stay Healthy. Find a Caregiver</span>
            <h2>Your Health is our top priority.</h2>
            <button>Find A Caregiver</button>
        </section>
        <x-reviews />
    </main>
</x-app-layout>
