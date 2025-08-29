<style>
    .contact {
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 10px 10px;
        align-items: center;
        background-color: var(--yellow);
        color: white;
    }

    .socials {
        width: 60%;
        display: flex;
        gap: 5px;
    }

    .socials .icon {
        width: 20px;
        fill: white;
    }

    .contact>p {
        color: white;
        justify-self: end;
    }

    .header {
        width: 100%;
        height: 120px;
        padding: 0 10px;
        display: flex;
        align-items: center;
        top: 0;
        z-index: 100;
        position: sticky;
        background-color: white;
        z-index: 1000;
    }

    .header .logo {
        width: 200px;
        height: 30%;
    }

    .header nav {
        width: 90%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .header nav>ul {
        display: flex;
        gap: 20px;
        align-items: center;
        margin-right: 20px;
    }

    .header nav>ul span {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .header nav>ul>li {
        padding: 10px;
        font-size: 14px;
        position: relative;
    }

    .header nav ul p {
        padding: 5px 10px;
        margin-bottom: -5px;
        color: gray;
    }

    .header nav>ul>li span {
        user-select: none;
        cursor: pointer;
    }

    .header .headerBtn {
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid var(--blue);
        background-color: var(--blue);
        cursor: pointer;
        color: white;
        transition: all 0.2s ease;
        gap: 10px;
    }

    .header .headerBtn:hover {
        background-color: var(--yellow);
        border: 2px solid var(--yellow);
        color: white;
    }

    .dropdown {
        position: absolute;
        display: flex;
        right: 0;
        margin-top: 15px;
        margin-right: 10px;
    }

    .dropdown ul {
        width: 140px;
        display: flex;
        flex-direction: column;
        z-index: 100;
        background-color: white;
        border: 1px solid;
    }

    .dropdown ul li {
        padding: 10px;
        border-bottom: 1px solid grey;
        font-size: 14px;
    }

    .dropdown .lastItem {
        border-bottom: 0;
    }

    .dropdown button {
        all: unset;
        cursor: pointer;
    }

    @media (max-width: 640px) {
        .contact {
            grid-template-columns: 1fr;
            text-align: center;
            padding: 20px 10px;
        }

        .contact>p {
            justify-self: center;
            margin-top: 10px;
        }

        .socials {
            width: 100%;
            justify-content: center;
            gap: 10px;
        }

        .header {
            flex-direction: column;
            height: auto;
            padding: 10px 0;
        }

        .header .logo {
            width: 30%;
            height: auto;
            margin-bottom: 10px;
        }

        .header nav {
            width: 100%;
            justify-content: center;
            font-size: 10px;
        }

        .header nav ul {
            gap: 10px;
            margin-right: 0;
            flex-wrap: wrap;
        }

        .header nav ul li {
            font-size: 10px;
        }

        .header .headerBtn {
            padding: 8px 15px;
            font-size: 10px;
        }
    }
</style>
<x-important-alert />
<div class="contact">
    <div class="socials">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
            <path
                d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                fill-rule="evenodd" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512">
            <path
                d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z" />
        </svg>
    </div>
    <p>Call us at: +1 (404) 442-2019</p>
</div>
<header class="header">
    <x-a href="">
        <x-image src="/images/logo.avif" alt="" class="logo" />
    </x-a>
    <nav>
        <ul>
            <li class="{{ request()->routeIs('app.home') ? 'active-link' : '' }}">
                <x-a href="/">Home</x-a>
            </li>
            <li class="{{ request()->routeIs('app.dme-equipments') ? 'active-link' : '' }}">
                <x-a href="/dme-equipments">DME Equipments</x-a>
            </li>
            <li class="{{ request()->routeIs('app.caregivers') ? 'active-link' : '' }}">
                <x-a href="/caregivers">Caregivers</x-a>
            </li>
            <li class="{{ request()->routeIs('app.services') ? 'active-link' : '' }}" data-dropdown>
                <span data-click>
                    Resources
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon" :class="{ 'rotate-180': toggleDropdown }">
                        <path
                            d="M15 11a1 1 0 0 0 1 1h2.939a1 1 0 0 1 .75 1.811l-6.835 6.836a1.207 1.207 0 0 1-1.707 0L4.31 13.81a1 1 0 0 1 .75-1.811H8a1 1 0 0 0 1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1z" />
                    </svg>
                </span>
                <div class="dropdown" data-hidden data-target data-clicked-outside>
                    <ul>
                        <p>Articles</p>
                        <x-a href="/resources/industry-news">
                            <li>Industry News</li>
                        </x-a>
                        <x-a href="/resources/blogs">
                            <li>Blogs</li>
                        </x-a>
                        <x-a href="/resources/case-studies">
                            <li>Case Studies</li>
                        </x-a>
                        <p>Info</p>
                        <x-a href="/resources/about">
                            <li>About Us</li>
                        </x-a>
                    </ul>
                </div>
            </li>
        </ul>
        @if (Auth::check())
            <div data-dropdown>
                <button class="headerBtn" data-click>
                    {{ Auth::user()->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon" :class="{ 'rotate-180': dropdown }">
                        <path
                            d="M15 11a1 1 0 0 0 1 1h2.939a1 1 0 0 1 .75 1.811l-6.835 6.836a1.207 1.207 0 0 1-1.707 0L4.31 13.81a1 1 0 0 1 .75-1.811H8a1 1 0 0 0 1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1z" />
                    </svg>
                </button>
                <div id="dropdown" class="dropdown" data-target data-hidden data-clicked-outside>
                    <ul>
                        <x-a href="/user/dashboard">
                            <li>Account</li>
                        </x-a>
                        <x-a href="/user/cart">
                            <li>Cart</li>
                        </x-a>
                        <x-a href="/user/orders">
                            <li>Orders</li>
                        </x-a>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button>Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <x-a href="/login-register">
                <button class="headerBtn">
                    Login/Sign Up
                </button>
            </x-a>
        @endif
    </nav>
</header>
