<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Squad Medical Supplies - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('css')
    <style>
        body {
            width: 90%;
            margin: auto;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            width: 200px;
        }

        header ul {
            display: flex;
            gap: 10px;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <x-image src="{{asset('images/logo.avif')}}" alt="logo" />
        <nav>
            <ul>
                <x-a href="/admin">
                    <li>Product List</li>
                </x-a>
                <form action="{{ route('logout') }}">
                    <button class="primary">Logout</button>
                </form>
            </ul>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>

    @stack('js')
    @if (session('success'))
        <x-notification type="default" :content="session('success')" />
    @endif
    @if (session('warning'))
        <x-notification type="warning" :content="session('warning')" />
    @endif
    @if (session('danger'))
        <x-notification type="danger" :content="session('danger')" />
    @endif
</body>

</html>