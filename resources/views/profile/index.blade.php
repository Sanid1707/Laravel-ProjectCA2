@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
        <span>Your Posts</span>
        </h1>
    </div>
</div>

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            {{ $post->title }}
        </h2>

        <p class="py-8 text-gray-500 text-s">
            {{ $post->description }}
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on
            {{ date('jS M Y', strtotime($post->updated_at)) }}
        </p>

        <a href="/blog/{{ $post->slug }}"
            class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Keep Reading
        </a>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="float-right">
            <a href="/blog/{{ $post->slug }}/edit"
                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                Edit
            </a>
        </span>

        <span class="float-right">
            <form action="/blog/{{ $post->slug }}" method="POST">
                @csrf
                @method('delete')

                <button class="text-red-500 pr-3" type="submit">
                    Delete
                </button>
            </form>
        </span>
        @endif
    </div>
</div>
@endforeach

@endsection