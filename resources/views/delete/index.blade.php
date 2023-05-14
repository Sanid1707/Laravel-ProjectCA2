@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="max-w-md mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-3xl font-bold mb-6">Delete Account</h1>
        <p class="mb-6">Are you sure you want to delete your account?</p>
        <div class="flex justify-end">
            <a href="/profile/delete-account"
                class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 mr-2">
                Yes, Delete Account
            </a>
            <a href="/profile"
                class="bg-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-400">
                Cancel
            </a>
        </div>
    </div>
</div>
@endsection
