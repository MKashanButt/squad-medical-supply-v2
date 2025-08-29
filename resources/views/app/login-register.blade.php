@push('css')
    <link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
@endpush
<x-app-layout>
    <main>
        <div class="login">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" autocomplete="username">
                @if ($errors->get('email'))
                    <ul>
                        @foreach ((array) $errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="password">Password:</label>
                <div x-data="{ showPassword: false }" class="password">
                    <input x-bind:type="showPassword ? 'text' : 'password'" type ="password" name="password"
                        id="password" autocomplete="current-password">
                    <span x-show="showPassword == false" @click="showPassword = true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </span>
                    <span x-show="showPassword" @click="showPassword = false" x-cloak>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m15 18-.722-3.25" />
                            <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                            <path d="m20 15-1.726-2.05" />
                            <path d="m4 15 1.726-2.05" />
                            <path d="m9 18 .722-3.25" />
                        </svg>
                    </span>
                </div>
                @if ($errors->get('password'))
                    <ul>
                        @foreach ((array) $errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <button>
                    Login
                </button>
            </form>
        </div>
        <div class="register">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                @if ($errors->get('name'))
                    <ul>
                        @foreach ((array) $errors->get('name') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="name">Email:</label>
                <input type="email" name="email" id="email">
                @if ($errors->get('email'))
                    <ul>
                        @foreach ((array) $errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="password">Password:</label>
                <div x-data="{ showPassword: false }" data-password class="password">
                    <input x-bind:type="showPassword ? 'text' : 'password'" type ="password" name="password"
                        id="password">
                    <span x-show="showPassword == false" @click="showPassword = true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </span>
                    <span x-show="showPassword" @click="showPassword = false" x-cloak>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m15 18-.722-3.25" />
                            <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                            <path d="m20 15-1.726-2.05" />
                            <path d="m4 15 1.726-2.05" />
                            <path d="m9 18 .722-3.25" />
                        </svg>
                    </span>
                </div>
                <label for="password">Confirm Password:</label>
                <div x-data="{ showPassword: false }" class="password">
                    <input x-bind:type="showPassword ? 'text' : 'password'" type ="password"
                        name="password_confirmation" id="password">
                    <span x-show="showPassword == false" @click="showPassword = true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </span>
                    <span x-show="showPassword" @click="showPassword = false" x-cloak>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m15 18-.722-3.25" />
                            <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                            <path d="m20 15-1.726-2.05" />
                            <path d="m4 15 1.726-2.05" />
                            <path d="m9 18 .722-3.25" />
                        </svg>
                    </span>
                </div>
                @if ($errors->get('password'))
                    <ul>
                        @foreach ((array) $errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <button>
                    Register
                </button>
            </form>
        </div>
    </main>
</x-app-layout>
