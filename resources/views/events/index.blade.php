@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex justify-center items-center relative">
        @if (isset($success))
            <div class="bg-green-500 text-white absolute top-2 p-4 rounded flash-message uppercase" style="width: 98%">
                <h1 class="text-center font-semibold">Welcome {{ auth()->user()->name }}</h1>
            </div>
        @endif

        <h1 class="text-9xl uppercase text-red-950 font-medium">events page</h1>
    </div>

    <style>
        .flash-message {
            animation: fadeOut 2s ease-in-out forwards;
            opacity: 1;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
@endsection
