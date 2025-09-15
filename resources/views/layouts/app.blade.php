<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Squad Medical Supplies') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stack('css')
</head>

<body>
    <div>
        @include('partials._header')
        <!-- Page Content -->
        <main>
            @if (request()->routeIs('user.*'))
                @if(Auth::user()->checkAccountType('admin'))
                    <div style="width:100%;padding: 100px;text-align:center;">
                        <p>This is an admin account. <a href="{{route('admin.dashboard')}}" style="color: blue">Route to admin
                                dashboard?</a></p>
                    </div>
                @else
                    <div class="dashboard-body">
                        @include('partials._user-nav')
                        <div class="content">
                            {{ $slot }}
                        </div>
                    </div>
                @endif
            @else
                {{ $slot }}
            @endif
        </main>
        @include('partials._footer')
    </div>
    @if (session('success'))
        <x-notification type="default" :content="session('success')" />
    @endif
    @if (session('warning'))
        <x-notification type="warning" :content="session('warning')" />
    @endif
    @if (session('danger'))
        <x-notification type="danger" :content="session('danger')" />
    @endif

    <!-- Scripts -->
    @stack('js')
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>