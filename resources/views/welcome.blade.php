@extends('layouts.app')

@section('title', 'Welcome')
@section('content')
<div class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to Our Buku Jaya</h1>
        <p class="text-xl mb-8">Find your favorite books and office supplies at the best prices</p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('auth.login') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Login</a>
            <a href="{{ route('user.products') }}" class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Browse Products</a>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @for($i = 1; $i <= 3; $i++)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-500">Product Image {{$i}}</span>
            </div>
            <div class="p-4">
                <h3 class="font-bold text-xl mb-2">Book Title {{$i}}</h3>
                <p class="text-gray-600 mb-4">Author Name {{$i}}</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold text-lg">${{rand(10, 50)}}.99</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection