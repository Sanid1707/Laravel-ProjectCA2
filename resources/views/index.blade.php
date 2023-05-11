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
                <a href="/blog" class="absolute bottom-4 left-4">
                    <button
                        class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">View Blogs</button>
                </a>
            </div>
        </div>
    </div>

<!-- tiao edit this :3 -->
<!-- <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>

        <p class="py-8 text-gray-500 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos
            molestias porro vero. Vel alias.
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div> -->

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos
        temporibus quaerat facere consectetur qui.
    </p>
</div> 

<div class="flex flex-col md:flex-row justify-center gap-6 mx-auto text-center">
  @foreach ($posts as $post)
  <div class="w-72 md:w-1/3 h-72 bg-cover bg-center relative" style="background-image: url('{{ asset('images/' . $post->image_path) }}')">
    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-75 text-white py-10 px-6">
      <h1 class="uppercase text-xl font-bold pb-8">{{ $post->title }}</h1>
      <a href="/blog/{{ $post->slug }}" class="uppercase bg-transparent border-2 border-gray-100 text-white text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-gray-100 hover:text-black">
        Find Out More
      </a>
    </div>
  </div>
  @endforeach
</div>





@endsection