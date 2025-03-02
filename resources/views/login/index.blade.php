@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-center pt-20">

        <form class="flex flex-col bg-gray-700 p-6 rounded-lg shadow-md w-full max-w-sm mx-auto space-y-4"
            action="{{ route('signin') }}" method="POST">
            @csrf

            <div class="flex gap-3 w-full justify-center items-center">
                <h2 class="text-2xl font-bold text-green-500 text-center uppercase ">Log in to</h2>
                <img class="w-7 rotate-45" src="{{ asset('images/spotify.svg') }}" alt="">
            </div>


            <div>
                <label for="email" class="block text-sm font-medium text-green-500">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 w-full pt-2 pb-1 caret-green-500  border-b-2 border-green-500 bg-transparent outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-green-500">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 w-full pt-2 pb-1 caret-green-500  border-b-2 border-green-500  bg-transparent outline-none">
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-gray-700 font-medium py-2 rounded-lg transition duration-300 uppercase">
                Log in
            </button>

        </form>

        @if (session('error'))
            <div class="text-red-500 p-3 rounded-md">{{ session('error') }}</div>
        @endif
    </div>
@endsection
