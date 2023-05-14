@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto pt-20">
    <div class="text-left">
        <h1 class="text-4xl">
            Your Profile
        </h1>
    </div>
    <div class="pt-10 flex flex-col justify-between">
        <a href="/settings" class="pb-2 italic text-blue-500 text-2xl w-100">
            Settings
        </a>
        
        <a href="/your-posts" class="pb-2 italic text-blue-500 text-2xl w-100">
            Your Posts
        </a>

        <a href="/profile/confirm-delete-account" class="pb-2 italic text-red-500 text-2xl w-100">
            Delete Account
        </a>
    </div>
</div>

@endsection