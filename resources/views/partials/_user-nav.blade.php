<style>
    .dashboard-body {
        display: flex;
        width: 90%;
        margin: 20px auto;
    }

    .dashboard-body .navigation {
        width: 20%;
        height: 100%;
        padding: 10px;
        background-color: var(--yellow);
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .dashboard-body .navigation .item {
        padding: 10px;
        background-color: white;
        border: 2px solid white;
        cursor: pointer;
    }

    .dashboard-body .navigation .item button {
        all: unset;
        cursor: pointer;
    }
</style>
<div class="navigation">
    <x-a href="/user/dashboard">
        <div class="item">
            <p>Account</p>
        </div>
    </x-a>
    <x-a href="/user/cart">
        <div class="item">
            <p>Cart</p>
        </div>
    </x-a>
    <x-a href="/user/orders">
        <div class="item">
            <p>Orders</p>
        </div>
    </x-a>
    <div class="item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>
                <p>Logout</p>
            </button>
        </form>
    </div>
</div>
