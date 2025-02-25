@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex justify-center items-center relative">
        @if (isset($success))
            <div class="bg-blue-400 text-white absolute top-5 right-5 p-4 rounded-md flash-message uppercase">
                <p>Welcome {{ auth()->user()->name }}</p>
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
