@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex justify-center items-center">
        <h1 class="text-9xl uppercase text-red-950 font-medium">{{ auth()->user()->name }}</h1>
    </div>
@endsection
