<nav class="bg-gray-700 flex justify-between items-center p-5 text-white uppercase">
    <div class="flex gap-3">
        <img class="w-7 rotate-45" src="{{ asset('images/spotify.svg') }}" alt="">
        <h1 class="text-3xl text-green-500 font-bold">Spatiepy</h1>
    </div>

    <div class="flex gap-5 items-center text-green-500 font-semibold">
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
                <button type="submit"
                    class="text-white py-3 px-5 rounded-full uppercase bg-red-500 text-xs hover:scale-105 transition">Logout</button>
            </form>
        @else
            <a class="py-3 px-5 rounded-full uppercase bg-green-500 text-xs text-white  hover:scale-105 transition"
                href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
