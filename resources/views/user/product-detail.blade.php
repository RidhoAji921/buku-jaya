@extends('layouts.user')

@section('title', 'Product Detail')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Product Image -->
        <div class="md:w-1/2">
            <div class="bg-gray-200 rounded-lg overflow-hidden h-96 flex items-center justify-center">
                <span class="text-gray-500 text-xl">Product Image</span>
            </div>
        </div>

        <!-- Product Info -->
        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold mb-2">Book Title</h1>
            <p class="text-gray-600 mb-4">by Author Name</p>
            
            <div class="flex items-center mb-4">
                <div class="flex text-yellow-400 mr-2">
                    @for($i = 1; $i <= 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    @endfor
                </div>
                <span class="text-gray-600">(24 reviews)</span>
            </div>

            <div class="mb-6">
                <span class="text-3xl font-bold">$29.99</span>
                <span class="text-gray-500 line-through ml-2">$39.99</span>
                <span class="bg-red-100 text-red-800 text-sm font-semibold ml-2 px-2 py-1 rounded">25% OFF</span>
            </div>

            <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

            <div class="mb-6">
                <h3 class="font-semibold mb-2">Quantity</h3>
                <div class="flex items-center">
                    <button class="bg-gray-200 px-3 py-1 rounded-l">-</button>
                    <span class="border-t border-b border-gray-200 px-4 py-1">1</span>
                    <button class="bg-gray-200 px-3 py-1 rounded-r">+</button>
                </div>
            </div>

            <div class="flex space-x-4">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex-1">Add to Cart</button>
                <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition flex-1">Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Product Tabs -->
    <div class="mt-12">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px">
                <button class="border-b-2 border-blue-500 text-blue-600 px-4 py-3 font-medium">Description</button>
                <button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-3 font-medium">Reviews</button>
                <button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-3 font-medium">Shipping</button>
            </nav>
        </div>
        <div class="py-6">
            <h3 class="font-semibold text-lg mb-3">Product Details</h3>
            <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Sed do eiusmod tempor incididunt</li>
                <li>Ut labore et dolore magna aliqua</li>
            </ul>
        </div>
    </div>

    <!-- Related Products -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6">You May Also Like</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @for($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Related Product {{$i}}</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Related Book {{$i}}</h3>
                    <p class="text-gray-600 mb-3">Author {{$i}}</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">${{rand(15, 40)}}.99</span>
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection