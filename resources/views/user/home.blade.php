@extends('layouts.user')

@section('title', 'Home')
@section('user-content')
<div class="bg-blue-600 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">Welcome to Our Buku Jaya</h1>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Discover a wide collection of books and office supplies at competitive prices</p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('user.products') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Browse Products</a>
            <a href="{{ route('user.special-offers') }}" class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Special Offers</a>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8">Featured Books</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @for($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Book Cover {{$i}}</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Book Title {{$i}}</h3>
                    <p class="text-gray-600 mb-3">Author {{$i}}</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">${{rand(10, 30)}}.99</span>
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

    <div>
        <h2 class="text-3xl font-bold text-center mb-8">Office Supplies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @for($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Product Image {{$i}}</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Office Supply {{$i}}</h3>
                    <p class="text-gray-600 mb-3">Brand {{$i}}</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">${{rand(5, 20)}}.99</span>
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Why Choose Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Quality Products</h3>
                <p class="text-gray-600">We offer only the highest quality books and office supplies from trusted brands.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Fast Delivery</h3>
                <p class="text-gray-600">Get your orders delivered quickly with our efficient shipping partners.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Secure Payment</h3>
                <p class="text-gray-600">Shop with confidence using our secure payment processing system.</p>
            </div>
        </div>
    </div>
</div>
@endsection