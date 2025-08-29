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

    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
</head>

<body>
    <div>
        @include('partials._header')
        <!-- Page Content -->
        <main>
            @if (request()->routeIs('user.*'))
                <div class="dashboard-body">
                    @include('partials._user-nav')
                    <div class="content">
                        {{ $slot }}
                    </div>
                </div>
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
