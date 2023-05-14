@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-bold text-blue-500">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/2 mb-4 text-red-700 bg-red-100 rounded-lg py-2 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none font-bold text-gray-700 placeholder-gray-400">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-8 bg-transparent block border-b-2 w-full h-60 text-xl outline-none text-gray-700 placeholder-gray-400"></textarea>

        <div class="bg-gray-100 mt-8 px-4 py-6 rounded-lg">
            <label for="image" class="block text-gray-700 text-xl mb-2">Upload Image</label>
            <br>
            <input 
                type="file"
                name="image"
                id="image"
                class="hidden">

            <label for="image" class="bg-blue-500 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded-lg cursor-pointer">
                Select Image
            </label>
            <span id="selected-image" class="ml-4 text-gray-600"></span>
        </div>

        <button    
            type="submit"
            class="mt-12 bg-blue-500 hover:bg-blue-700 text-gray-100 text-lg font-bold py-4 px-8 rounded-lg">
            Submit Post
        </button>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        document.getElementById('selected-image').textContent = fileName;
    });
</script>

@endsection
