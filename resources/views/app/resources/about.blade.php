@php
    $products = App\Models\Product::select('thumbnail', 'name')->limit(8)->get();
@endphp
@push('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
@endpush
<x-app-layout>
    <main>
        <section class="hero">
            <div class="overlay"></div>
            <div class="content">
                <h1>Guiding You Through <br /><span>Every Stage</span></h1>
            </div>
            <div class="overlayContent">
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path d="M376 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path
                            d="M288 304c-87 0-175.3 48-191.64 138.6-2 10.92 4.21 21.4 15.65 21.4H464c11.44 0 17.62-10.48 15.65-21.4C463.3 352 375 304 288 304z"
                            stroke-miterlimit="10" stroke-width="32" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M88 176v112M144 232H32" />
                    </svg>
                    <h3>Experience of 4+ years</h3>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <rect x="32" y="112" width="448" height="352" rx="48" ry="48"
                            stroke-linejoin="round" stroke-width="32" />
                        <path d="M144 112V80a32 32 0 0132-32h160a32 32 0 0132 32v32M256 208v160M336 288H176"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <h3>4700+ Patients Cured</h3>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path
                            d="M313.27 124.64L198.73 51.36a32 32 0 00-29.28.35L56.51 127.49A16 16 0 0048 141.63v295.8a16 16 0 0023.49 14.14l97.82-63.79a32 32 0 0129.5-.24l111.86 73a32 32 0 0029.27-.11l115.43-75.94a16 16 0 008.63-14.2V74.57a16 16 0 00-23.49-14.14l-98 63.86a32 32 0 01-29.24.35zM328 128v336M184 48v336"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <h3>Operating in Multiple States</h3>
                </div>
            </div>
        </section>
        <section class="missionVision container">
            <h2>About Squad Medical Supplies</h2>
            <p>Squad Medical Supplies has led the way in offering patients around the US premium, long-lasting medical
                equipment (DME) since our establishment in 2020. We have successfully treated over 4,700 patients
                countrywide, assisting them in managing chronic ailments, recovering from injuries, and increasing their
                mobility and quality of life via our unwavering dedication to enhancing patient care and fostering
                general well-being.</p>
            <p>From continuous glucose monitors (CGMs) to orthopedic braces, our wide choice of DME products is made to
                fit the individual demands of every patient, guaranteeing that they get the correct equipment at the
                right time. We collaborate with leading insurance companies, such as Aetna, Cigna, BCBS, and UHC, to
                provide cost-effective options that are covered by the majority of health plans, facilitating patients'
                access to necessary medical equipment without putting a pressure on their finances.</p>
            <div class="stage">
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" />
                        <path
                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                            fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                    </svg>
                    <div class="content">
                        <h3>Our Mission</h3>
                        <p>Our goal at Squad Medical Supplies is to improve patients' quality of life by making
                            high-quality, long-lasting medical equipment easily accessible. Regardless of geography or
                            medical condition, we think all patients should have access to the resources they need to
                            take control of their health and live freely.</p>
                        <p>By facilitating easy access to items that cater to each patient's unique needs, we hope to
                            streamline the healthcare experience. Whether it's a continuous glucose monitor for diabetes
                            control or an orthopedic brace for injury recovery, we ensure that every product is
                            prescribed, authorized, and delivered with care.</p>
                        <p>Our goal is to ensure that our patients receive the finest care possible without needless
                            obstacles or hassles by bridging the gap between insurance companies, patients, and
                            healthcare providers.</p>
                    </div>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
                        <path
                            d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" />
                        <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor"
                            stroke-miterlimit="10" stroke-width="32" />
                    </svg>
                    <div class="content">
                        <h3>Our Vision</h3>
                        <p>Our goal is to become the top supplier of long-lasting medical equipment in the US, renowned
                            for our creativity, attention to detail, and dedication to accessibility. By offering smooth
                            and reasonably priced solutions that simplify, expedite, and improve healthcare, we hope to
                            revolutionize the way individuals get medical equipment.</p>
                        <p>In order to help patients lead better lives, we hope to improve our services and increase the
                            range of products we provide as we grow. In the future, Squad Medical Supplies will be known
                            for its commitment to enhancing patient outcomes by providing superior, patient-centered
                            care.</p>
                        <p>Our mission is based on the conviction that everyone should have access to healthcare and
                            that everyone has a right to the medical supplies they require in order to survive. By
                            providing goods and services that enable our clients to live comfortably and independently
                            while negotiating the difficulties of insurance coverage and medical needs, we hope to
                            establish ourselves as a reliable healthcare partner.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about container">
            <div class="content">
                <h2>What Sets Us Apart?</h2>
                <p>Our dedication to quality and patient happiness is at the core of our offerings. We guarantee
                    accessibility no matter where you are thanks to our large countrywide network. Our wide selection of
                    superior items is made to accommodate different demands and provide useful solutions that genuinely
                    have an impact.</p>
                <p>We are aware of how complicated healthcare may be, we provide our clients professional help with
                    insurance coverage, which makes the process easier and less stressful. Above all, we continue to
                    prioritize patient-centered care, guaranteeing individualized attention and steadfast support at
                    every stage. We are a reliable partner in your healthcare journey because of these beliefs, which
                    set us apart.</p>
                <ul>
                    <li>Nationwide Reach.</li>
                    <li>A Wide Variety of Products.</li>
                    <li>Assistance with Insurance Coverage.</li>
                    <li>Patient-Centered Treatment.</li>
                </ul>
            </div>
            <div class="image">
                <div class="shape"></div>
                <x-image src="images/doctor.avif" alt="doctor-standing-near-window" />
            </div>
        </section>
        <section class="howToBuy">
            <x-image src="images/shoppping-icon.avif" alt="shopping-icon" />
            <div class="content container">
                <h2>How to Request a Product at Zero Out-of-Pocket Cost</h2>
                <div class="stage">
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" width=40 height=40>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <div class="content">
                            <h3>Submit Your Product Request Online</h3>
                        </div>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" width=40 height=40>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <div class="content">
                            <h3>Get Product Confirmation Call</h3>
                        </div>
                    </div>
                    <div class="item">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="#ffffff"
                            xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                            <path
                                d="M10.9193 10.419C10.9192 10.0048 10.5834 9.669 10.1692 9.66904C9.755 9.66908 9.41925 10.0049 9.41929 10.4191V15.5816C9.41925 15.9958 9.755 16.3317 10.1692 16.3317C10.5834 16.3317 10.9192 15.996 10.9193 15.5818L10.9195 13.7504H13.0807L13.0807 15.5817C13.0807 15.9959 13.4165 16.3317 13.8307 16.3317C14.2449 16.3317 14.5807 15.9959 14.5807 15.5817L14.5807 10.419C14.5807 10.0048 14.2449 9.66904 13.8307 9.66904C13.4164 9.66904 13.0807 10.0048 13.0807 10.419V12.2504H10.9195L10.9193 10.419Z"
                                fill="#ffffff" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.35 3.70391C12.55 3.10391 11.45 3.10391 10.65 3.70391L4.15 8.57891C3.58344 9.00383 3.25 9.6707 3.25 10.3789V18.5003C3.25 19.743 4.25736 20.7503 5.5 20.7503H18.5C19.7426 20.7503 20.75 19.743 20.75 18.5003V10.3789C20.75 9.6707 20.4166 9.00383 19.85 8.57891L13.35 3.70391ZM11.55 4.90391C11.8167 4.70391 12.1833 4.70391 12.45 4.90391L18.95 9.77891C19.1389 9.92055 19.25 10.1428 19.25 10.3789V18.5003C19.25 18.9145 18.9142 19.2503 18.5 19.2503H5.5C5.08579 19.2503 4.75 18.9145 4.75 18.5003V10.3789C4.75 10.1428 4.86115 9.92055 5.05 9.77891L11.55 4.90391Z"
                                fill="#ffffff" />
                        </svg>
                        <div class="content">
                            <h3>Doctor’s Approval for Medical Necessity</h3>
                        </div>
                    </div>
                    <div class="item">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="#ffffff"
                            xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.24756 6C7.83756 6 7.49756 6.34 7.49756 6.75V8.39L5.99756 9.07V6.75C5.99756 5.51 7.00756 4.5 8.24756 4.5H8.99756V4.25C8.99756 3.01 10.0076 2 11.2476 2H12.7476C13.9876 2 14.9976 3.01 14.9976 4.25V4.5H15.7476C16.9876 4.5 17.9976 5.51 17.9976 6.75V9.07L16.4976 8.39V6.75C16.4976 6.34 16.1576 6 15.7476 6H8.24756ZM11.2476 3.5C10.8376 3.5 10.4976 3.84 10.4976 4.25V4.5H13.4976V4.25C13.4976 3.84 13.1576 3.5 12.7476 3.5H11.2476Z"
                                fill="#ffffff" />
                            <path
                                d="M5.3776 17.6999C5.7776 17.7199 6.1676 17.8799 6.4676 18.1099C6.6776 18.2699 6.9276 18.4299 7.2076 18.5799C7.1976 18.5599 7.1901 18.5399 7.1826 18.5199C7.1751 18.4999 7.1676 18.4799 7.1576 18.4599L5.5876 13.0699C5.4776 12.7099 5.6676 12.3199 6.0176 12.1699L11.7076 9.73992C11.8976 9.65992 12.1076 9.65992 12.2976 9.73992L17.9876 12.1699C18.3376 12.3199 18.5176 12.6999 18.4176 13.0699L16.8476 18.4599C16.8476 18.4599 16.8176 18.5399 16.7976 18.5799C17.0776 18.4299 17.3276 18.2699 17.5376 18.1099C17.8376 17.8799 18.2276 17.7299 18.6276 17.6999L19.8476 13.4799C20.1676 12.3899 19.6176 11.2299 18.5676 10.7799L12.8776 8.34992C12.3176 8.10992 11.6776 8.10992 11.1076 8.34992L5.4176 10.7799C4.3676 11.2299 3.8176 12.3799 4.1376 13.4799L5.3576 17.6999H5.3776Z"
                                fill="#ffffff" />
                            <path
                                d="M21.5577 20.32L18.8277 19.06C18.5377 18.93 18.1977 18.99 17.9777 19.22C17.9677 19.23 16.7077 20.49 15.2577 20.49C15.0677 20.49 14.8977 20.46 14.7277 20.43C13.5177 20.18 12.5577 19.22 12.5477 19.21C12.4077 19.07 12.2177 18.98 12.0077 18.98C11.8077 18.98 11.6177 19.06 11.4677 19.2C11.4577 19.21 10.4977 20.17 9.28769 20.42C9.22916 20.4265 9.17062 20.4351 9.11175 20.4438C8.98959 20.4618 8.86588 20.48 8.73769 20.48C7.28769 20.48 6.02769 19.22 6.01769 19.21C5.79769 18.98 5.45769 18.92 5.16769 19.05L2.43769 20.31C2.05769 20.48 1.89769 20.93 2.06769 21.3C2.23769 21.68 2.68769 21.84 3.06769 21.67L5.34769 20.62C5.96769 21.13 7.23769 21.98 8.73769 21.98C10.1377 21.98 11.3377 21.23 11.9977 20.72C12.6577 21.23 13.8577 21.98 15.2577 21.98C16.7577 21.98 18.0277 21.12 18.6477 20.62L20.9277 21.67C21.2977 21.84 21.7477 21.67 21.9277 21.3C22.0977 20.92 21.9277 20.48 21.5577 20.31V20.32Z"
                                fill="#ffffff" />
                        </svg>
                        <div class="content">
                            <h3>Fast and Secure Product Shipment</h3>
                        </div>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="white" width="40" height="40">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <div class="content">
                            <h3>Insurance Claim Submission</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services container">
            <h2>Services We Provide</h2>
            <div class="stage" x-data="{ activeTab: 'dme' }">
                <div class="tabs">
                    <div class="item" @click="activeTab = 'dme'">
                        <svg width="40" height="40" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg"
                            class="icon">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.64844 2.75C2.64844 2.33579 2.98422 2 3.39844 2H4.89844C6.14108 2 7.14844 3.00736 7.14844 4.25V6.375H16.1484C17.3911 6.375 18.3984 7.38236 18.3984 8.625V17.378C18.9068 17.5577 19.3312 17.9148 19.5974 18.375H21.2734C21.6877 18.375 22.0234 18.7108 22.0234 19.125C22.0234 19.5392 21.6877 19.875 21.2734 19.875H19.8673C19.6888 20.9391 18.7633 21.75 17.6484 21.75C16.4058 21.75 15.3984 20.7426 15.3984 19.5C15.3984 18.5203 16.0245 17.6869 16.8984 17.378V13.1304H13.7791C14.1715 13.9428 14.3915 14.8541 14.3915 15.8169C14.3915 19.2322 11.6228 22.0009 8.20748 22.0009C4.79213 22.0009 2.02344 19.2322 2.02344 15.8169C2.02344 13.3142 3.51008 11.1588 5.64844 10.1855V4.25C5.64844 3.83579 5.31265 3.5 4.89844 3.5H3.39844C2.98422 3.5 2.64844 3.16421 2.64844 2.75ZM7.14844 9.72314C7.49255 9.66376 7.8464 9.63281 8.20748 9.63281C10.008 9.63281 11.6288 10.4023 12.759 11.6304H16.8984V8.625C16.8984 8.21079 16.5627 7.875 16.1484 7.875H7.14844V9.72314ZM8.20748 11.1328C5.62056 11.1328 3.52344 13.2299 3.52344 15.8169C3.52344 18.4038 5.62056 20.5009 8.20748 20.5009C10.7944 20.5009 12.8915 18.4038 12.8915 15.8169C12.8915 13.2299 10.7944 11.1328 8.20748 11.1328ZM16.8984 19.5C16.8984 19.0858 17.2342 18.75 17.6484 18.75C18.0627 18.75 18.3984 19.0858 18.3984 19.5C18.3984 19.9142 18.0627 20.25 17.6484 20.25C17.2342 20.25 16.8984 19.9142 16.8984 19.5Z" />
                        </svg>
                        <h3>DME Equipment</h3>
                        <p>Reliable Solutions, Empowered Living</p>
                    </div>
                    <div class="item" @click="activeTab = 'caregiver'">
                        <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="icon">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.4423 4.05183C13.4423 3.02111 14.2779 2.18555 15.3086 2.18555C16.3393 2.18555 17.1749 3.02111 17.1749 4.05183C17.1749 5.08254 16.3393 5.91811 15.3086 5.91811C14.2779 5.91811 13.4423 5.08254 13.4423 4.05183ZM15.3086 3.68555C15.1063 3.68555 14.9423 3.84954 14.9423 4.05183C14.9423 4.25412 15.1063 4.41811 15.3086 4.41811C15.5109 4.41811 15.6749 4.25412 15.6749 4.05183C15.6749 3.84954 15.5109 3.68555 15.3086 3.68555Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.6044 11.2659C21.0447 10.6311 20.0839 10.5508 19.4266 11.0839L16.8212 13.197C16.512 12.6632 15.9345 12.304 15.2732 12.304H12.6754C11.5119 11.8794 10.2262 11.8074 9.41278 11.8111C8.64057 11.8146 7.94114 12.1196 7.38764 12.5621L5.69546 13.9148C5.47206 13.789 5.18986 13.781 4.95173 13.9185L2.37513 15.4061C2.01641 15.6132 1.8935 16.0719 2.10061 16.4306L5.09928 21.6245C5.30638 21.9832 5.76508 22.1061 6.1238 21.899L8.7004 20.4114C9.01125 20.2319 9.14503 19.8635 9.04042 19.535L9.56527 19.0601C9.70317 18.9353 9.8825 18.8662 10.0685 18.8662H16.2417C16.8423 18.8662 17.4104 18.5933 17.7859 18.1245L21.6525 13.2959C22.1317 12.6974 22.1114 11.841 21.6044 11.2659ZM8.2864 18.1943L8.55886 17.9478C8.97255 17.5735 9.51056 17.3662 10.0685 17.3662H16.2417C16.3869 17.3662 16.5242 17.3002 16.615 17.1869L20.4816 12.3583C20.5053 12.3287 20.5043 12.2863 20.4792 12.2579C20.4515 12.2265 20.404 12.2225 20.3715 12.2489L16.5205 15.3723C16.1984 15.686 15.7583 15.8793 15.2732 15.8793H12.5383C12.1241 15.8793 11.7883 15.5435 11.7883 15.1293C11.7883 14.7151 12.1241 14.3793 12.5383 14.3793H15.2732C15.3195 14.3793 15.3633 14.3684 15.4021 14.3489C15.4102 14.3417 15.4184 14.3347 15.4269 14.3279L15.5 14.2686C15.5381 14.2198 15.5608 14.1584 15.5608 14.0917C15.5608 13.9328 15.432 13.804 15.2732 13.804H12.5912C12.4613 13.804 12.3365 13.7794 12.222 13.7358C11.296 13.3829 10.1887 13.3076 9.41955 13.3111C9.04628 13.3128 8.66549 13.4609 8.32425 13.7337L6.53627 15.163L8.2864 18.1943ZM6.02332 20.225L3.77464 16.3302L5.05221 15.5926L7.30088 19.4874L6.02332 20.225Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0944 6.27857C12.8582 6.27857 11.856 7.28072 11.856 8.51694V9.44718C11.856 9.86139 12.1918 10.1972 12.606 10.1972H18.0111C18.4253 10.1972 18.7611 9.86139 18.7611 9.44718V8.51694C18.7611 7.28072 17.7589 6.27857 16.5227 6.27857H14.0944ZM13.356 8.51694C13.356 8.10915 13.6866 7.77857 14.0944 7.77857H16.5227C16.9305 7.77857 17.2611 8.10915 17.2611 8.51694V8.69718H13.356V8.51694Z" />
                        </svg>
                        <h3>Caregivers</h3>
                        <p>Assisting Those Who Are Most Important</p>
                    </div>
                </div>
                <div class="info" x-show="activeTab == 'dme'">
                    @foreach ($products as $key => $product)
                        <div class="item" key={{ $key }}>
                            <x-image :src="$product['thumbnail']" alt="{{ $product['name'] }} image" />
                            <h3>{{ $product['name'] }}</h3>
                        </div>
                    @endforeach
                </div>
                <div class="info activeInfo caregiverInfo" x-show="activeTab == 'caregiver'">
                    <div class="content">
                        <h3>Compassionate Support</h3>
                        <p>We recognize how important it is to find the best care for your loved ones. Our staff of
                            qualified caregivers is committed to offering individuals in need individualized, empathetic
                            help. We guarantee their comfort, safety, and well-being at every stage, whether we are
                            caring for the elderly, patients with long-term conditions, or those recuperating after
                            medical procedures. Our caregivers are prepared to provide excellent care, including
                            emotional support, health monitoring, and help with everyday tasks. We provide families with
                            the assurance that their loved ones are in skilled and compassionate hands by providing
                            dependable, responsive care.</p>
                        <p>A strong dedication to improving the quality of life for individuals in need of care is at
                            the core of our offerings. With our customers, our caregivers establish deep connections
                            that promote security and trust. Our staff makes sure that every need is satisfied with
                            expertise and care, from assisting with mobility and cleanliness to handling medication
                            scheduling and food preparation. By emphasizing friendship and emotional well-being, we go
                            above and beyond basic care, providing a kind, personal touch that genuinely makes a
                            difference. We enable people to live comfortably, confidently, and with dignity by providing
                            them with our caring care.</p>
                        <button class="primary">Get In Touch</button>
                    </div>
                    <div class="image">
                        <x-image src="images/caregiver-service-info.avif" alt="" />
                    </div>
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
                    <x-a href="tel:+14044422019">
                        +1 (404) 442-2019
                    </x-a>
                </button>
            </div>
        </section>
    </main>
</x-app-layout>
