<nav class="bg-gray-700 flex justify-between items-center p-5 text-white uppercase">
    <div>
        <h1 class="text-3xl text-green-500 font-bold">Spatiepy</h1>
    </div>

    <div class="flex gap-5 items-center">
        <a class=" p-2 rounded-md" href="{{ route('home') }}">Home</a>
        <a class=" p-2 rounded-md" href="{{ route('events') }}">Events</a>
        <a class=" p-2 rounded-md" href="{{ route('transaction') }}">Transactions</a>
        @can('manage-users')
            <a class=" p-2 rounded-md" href="{{ route('users') }}">Users</a>
        @endcan
        @if (auth()->check())
            <a class=" p-2 rounded-md" href="{{ route('profile') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="py-3 px-5 rounded-full uppercase bg-red-500 text-xs">Logout</button>
            </form>
        @else
            <a class="py-3 px-5 rounded-full uppercase bg-green-500 text-xs" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
