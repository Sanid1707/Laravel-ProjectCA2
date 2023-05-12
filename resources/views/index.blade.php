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

<main class="container mx-auto px-4 py-8">
  <h1 class="text-4xl font-bold mb-6">Amazing Destinations!</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="mb-8">
      <img src="{{ asset('images/image1.jpg') }}" alt="Image 1" class="w-full h-auto rounded-lg">
      <h2 class="text-2xl font-bold mt-4">Exploring the Beautiful Beaches of Bali</h2>
      <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis auctor erat sit amet lacinia.</p>
    </div>

    <div class="mb-8">
      <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="w-full h-auto rounded-lg">
      <h2 class="text-2xl font-bold mt-4">Hiking Adventures in the Swiss Alps</h2>
      <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis auctor erat sit amet lacinia.</p>
    </div>
  </div>

  <div class="mb-8">
    <img src="{{ asset('images/image3.jpg') }}" alt="Image 3" class="w-full h-auto rounded-lg">
    <h2 class="text-2xl font-bold mt-4">Cultural Delights in Kyoto, Japan</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis auctor erat sit amet lacinia.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="mb-8">
      <img src="{{ asset('images/image4.jpg') }}" alt="Image 4" class="w-full h-auto rounded-lg">
      <h2 class="text-2xl font-bold mt-4">Foodie Adventures in Italy</h2>
      <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis auctor erat sit amet lacinia.</p>
    </div>

    <div class="mb-8">
      <img src="{{ asset('images/image5.jpg') }}" alt="Image 5" class="w-full h-auto rounded-lg">
      <h2 class="text-2xl font-bold mt-4">Road Trip Through the American Southwest</h2>
      <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis auctor erat sit amet lacinia.</p>
    </div>
  </div>
</main>



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