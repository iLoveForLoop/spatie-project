<nav class="bg-gray-700 flex justify-between items-center p-5 text-white uppercase">
    <div>
        <h1 class="text-3xl text-green-700 font-bold">Spatiepy</h1>
    </div>

    <div class="flex gap-5">
        <a class=" p-2 rounded-md" href="{{ route('home') }}">Home</a>
        <a class=" p-2 rounded-md" href="{{ route('events') }}">Events</a>
        <a class=" p-2 rounded-md" href="{{ route('transaction') }}">Transactions</a>
        @can('manage-users')
            <a class=" p-2 rounded-md" href="{{ route('users') }}">Users</a>
        @endcan
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="p-2 rounded-md uppercase">Logout</button>
            </form>
            <a class=" p-2 rounded-md" href="{{ route('profile') }}">Profile</a>
        @else
            <a class=" p-2 rounded-md" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
