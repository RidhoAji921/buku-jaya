@extends('layouts.user')

@section('title', 'Products')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Our Products</h1>
        <div class="relative">
            <select class="block appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500">
                <option>All Categories</option>
                <option>Books</option>
                <option>Office Supplies</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @for($i = 1; $i <= 12; $i++)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-500">Product Image {{$i}}</span>
            </div>
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">{{$i%2 == 0 ? 'Book Title '.$i : 'Office Supply '.$i}}</h3>
                <p class="text-gray-600 mb-3">{{$i%2 == 0 ? 'Author '.$i : 'Brand '.$i}}</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold text-lg">${{rand(5, 50)}}.99</span>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <div class="mt-8 flex justify-center">
        <nav class="flex items-center space-x-2">
            <a href="#" class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">Previous</a>
            <a href="#" class="px-3 py-1 rounded bg-blue-600 text-white">1</a>
            <a href="#" class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">2</a>
            <a href="#" class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">3</a>
            <a href="#" class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">Next</a>
        </nav>
    </div>
</div>
@endsection