@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
        <span>{{ Auth::user()->name }}</span>
        </h1>
    </div>
</div>

@endsection