@extends('layouts.app')

@section('content')

<div class="lg:flex lg:items-center lg:justify-between">
    <div class="w-full">
        <div class="relative h-screen">
            <img src="{{ asset('images/travelPhoto1.jpg') }}" alt="Left Photo" class="w-full h-full object-cover">
        </div>
    </div>
    <div class="w-full">
        <div class="h-screen">
            <img src="{{ asset('images/travelPhoto2.jpg') }}" alt="Right Photo" class="w-full h-full object-cover">
        </div>
    </div>
</div>

<div class="flex flex-col sm:flex-row justify-between items-center bg-gray-200 py-16 px-6">
    <div class="w-full sm:w-1/2">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6">
            Explore the World through Captivating Travel Blogs
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            Immerse yourself in inspiring travel stories and experiences shared by passionate globetrotters. Discover
            hidden gems, breathtaking destinations, and valuable insights that will ignite your wanderlust.
        </p>
        <a href="/blog" class="bg-blue-500 text-white text-lg font-semibold py-3 px-8 rounded-full hover:bg-blue-600">
            Find Out More
        </a>
    </div>
    <div class="w-full sm:w-1/2 mt-8 sm:mt-0">
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="Travel Blog Image"
            class="w-full">
    </div>
</div>

<div class="bg-black text-white py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold text-center text-white mb-8">
            I'm an Expert in...
        </h2>
        <div class="grid grid-cols-2 gap-6">
            <div class="text-center">
                <span class="text-3xl font-semibold block mb-2">Exploring New Cultures</span>
                <span class="text-lg text-gray-300">Discovering diverse traditions, customs, and local
                    lifestyles.</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-semibold block mb-2">Adventure Photography</span>
                <span class="text-lg text-gray-300">Capturing breathtaking moments and stunning landscapes.</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-semibold block mb-2">Solo Travel Tips</span>
                <span class="text-lg text-gray-300">Unleashing the joys and challenges of traveling alone.</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-semibold block mb-2">Food and Culinary Experiences</span>
                <span class="text-lg text-gray-300">Indulging in authentic flavors and gastronomic adventures.</span>
            </div>
        </div>
    </div>
</div>


<div class="text-center py-15">
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
</div>

<div class="flex flex-col md:flex-row justify-center gap-6 mx-auto text-center">
    @if(count($posts) > 0)
    @foreach ($posts as $post)

    <div class="w-72 md:w-1/3 h-72 bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/' . $post->image_path) }}')">
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-75 text-white py-10 px-6">
            <h1 class="uppercase text-xl font-bold pb-8">{{ $post->title }}</h1>
            <a href="/blog/{{ $post->slug }}"
                class="uppercase bg-transparent border-2 border-gray-100 text-white text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-gray-100 hover:text-black">
                Find Out More
            </a>
        </div>
    </div>
    @endforeach
    @else

    <p class="text-center w-full text-2xl">
        No posts found
    </p>

    @endif


</div>





@endsection