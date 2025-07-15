@extends('layouts.user')

@section('title', 'Special Offers')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl p-8 text-white mb-12">
        <div class="max-w-3xl">
            <h1 class="text-4xl font-bold mb-4">Special Offers</h1>
            <p class="text-xl mb-6">Limited-time deals on our best-selling books and office supplies</p>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-medium">Offer ends in 3 days 12 hours</span>
            </div>
        </div>
    </div>

    <!-- Featured Offers -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Featured Offers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([1,2,3] as $offer)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition relative">
                <!-- Badge -->
                <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold">
                    -{{ 20 + ($offer * 5) }}%
                </div>
                
                <!-- Product Image -->
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Featured Product {{ $offer }}</span>
                </div>
                
                <!-- Product Info -->
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Premium Book Collection {{ $offer }}</h3>
                    <p class="text-gray-600 mb-4">Limited edition set with exclusive content</p>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-2">
                            @for($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            @endfor
                        </div>
                        <span class="text-gray-600 text-sm">({{ 42 + ($offer * 8) }} reviews)</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold">${{ 49 - ($offer * 5) }}.99</span>
                            <span class="text-gray-500 line-through ml-2">${{ 69 - ($offer * 5) }}.99</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Flash Sale Section -->
    <div class="mb-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h2 class="text-2xl font-bold">Flash Sale</h2>
            <div class="bg-red-100 text-red-800 px-4 py-2 rounded-full flex items-center mt-2 md:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-bold">Ends in 12:34:56</span>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach([1,2,3,4,5] as $item)
            <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition border border-gray-100">
                <div class="relative">
                    <div class="h-32 bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500">Flash Item {{ $item }}</span>
                    </div>
                    <div class="absolute bottom-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                        -{{ 30 + $item }}%
                    </div>
                </div>
                
                <div class="p-3">
                    <h3 class="font-semibold text-sm mb-1">Office Supply {{ $item }}</h3>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-blue-600">${{ 9 + $item }}.99</span>
                            <span class="text-gray-500 line-through text-xs ml-1">${{ 15 + $item }}.99</span>
                        </div>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Category Offers -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Category Offers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Book Category Offer -->
            <div class="relative rounded-xl overflow-hidden h-64">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-900/30 z-10"></div>
                <div class="h-full bg-gray-300 flex items-center justify-center">
                    <span class="text-gray-500">Books Background</span>
                </div>
                <div class="absolute bottom-0 left-0 p-6 z-20 text-white">
                    <h3 class="text-2xl font-bold mb-2">Book Lovers' Deal</h3>
                    <p class="mb-4">Get 3 books for the price of 2 on selected titles</p>
                    <button class="bg-white text-blue-600 px-4 py-2 rounded font-medium hover:bg-gray-100 transition">
                        Shop Books
                    </button>
                </div>
            </div>
            
            <!-- Office Supplies Category Offer -->
            <div class="relative rounded-xl overflow-hidden h-64">
                <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 to-green-900/30 z-10"></div>
                <div class="h-full bg-gray-300 flex items-center justify-center">
                    <span class="text-gray-500">Office Supplies Background</span>
                </div>
                <div class="absolute bottom-0 left-0 p-6 z-20 text-white">
                    <h3 class="text-2xl font-bold mb-2">Back to School</h3>
                    <p class="mb-4">30% off on all stationery and office supplies</p>
                    <button class="bg-white text-green-600 px-4 py-2 rounded font-medium hover:bg-gray-100 transition">
                        Shop Supplies
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-blue-50 rounded-xl p-8 text-center">
        <h2 class="text-2xl font-bold mb-2">Get Exclusive Offers</h2>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Subscribe to our newsletter and be the first to know about special promotions and discounts</p>
        <div class="max-w-md mx-auto flex">
            <input type="email" placeholder="Your email address" class="flex-1 border border-gray-300 rounded-l-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700 transition">
                Subscribe
            </button>
        </div>
    </div>
</div>
@endsection