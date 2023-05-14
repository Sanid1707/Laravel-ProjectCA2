@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold text-blue-500">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
<div class="w-4/5 m-auto mt-10">
    <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-6 font-bold">
        {{ session()->get('message') }}
    </p>
</div>
@endif

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create"
        class="bg-blue-500 uppercase text-gray-100 text-lg font-bold py-3 px-6 rounded-3xl hover:bg-blue-700">
        Create Post
    </a>
</div>
@endif

@foreach ($posts as $post)
@if($post->is_public == 0)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-lg">
    </div>
    <div>
        <h2 class="text-gray-800 text-4xl font-bold pb-4">
            {{ $post->title }}
        </h2>

        <div class="flex items-center text-gray-500 mb-4">
            <span class="mr-2">
                Likes {{ $post->likes }}
            </span>
            <span class="mr-2">
                Dislikes {{ $post->dislikes }}
            </span>
            <span>
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on
                {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
        </div>

        <p class="text-xl text-gray-700 leading-8 font-light">
            {{ $post->description }}
        </p>

        <div class="flex mt-6">
            <a href="/blog/{{ $post->slug }}"
                class="bg-blue-500 text-gray-100 text-lg font-bold py-3 px-6 rounded-3xl hover:bg-blue-700 mr-4">
                Keep Reading
            </a>
            <a href="/blog/like/{{ $post->slug }}"
                class="bg-green-500 text-gray-100 text-lg font-bold py-3 px-6 rounded-3xl hover:bg-green-700 mr-4">
                Like
            </a>
            <a href="/blog/dislike/{{ $post->slug }}"
                class="bg-red-500 text-gray-100 text-lg font-bold py-3 px-6 rounded-3xl hover:bg-red-700">
                Dislike
            </a>
        </div>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <div class="mt-6">
            <a href="/blog/{{ $post->slug }}/edit" class="text-blue-500 hover:text-blue-700 mr-4">
                Edit
            </a>

            <span class="text-red-500">
                <form action="/blog/{{ $post->slug }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500 hover:text-red-700">
                        Delete
                    </button>
                </form>
            </span>
        </div>
        @endif
    </div>
</div>
@endif
@endforeach

@endsection