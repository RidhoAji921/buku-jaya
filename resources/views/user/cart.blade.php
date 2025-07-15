@extends('layouts.user')

@section('title', 'Shopping Cart')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Your Shopping Cart</h1>
    
    @if(true) <!-- Check if cart has items -->
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Cart Items -->
        <div class="md:w-2/3">
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="hidden md:grid grid-cols-12 bg-gray-100 p-4 border-b">
                    <div class="col-span-5 font-semibold text-gray-600">Product</div>
                    <div class="col-span-2 font-semibold text-gray-600">Price</div>
                    <div class="col-span-3 font-semibold text-gray-600">Quantity</div>
                    <div class="col-span-2 font-semibold text-gray-600">Total</div>
                </div>
                
                <!-- Cart Item -->
                @for($i = 1; $i <= 3; $i++)
                <div class="p-4 border-b">
                    <div class="grid grid-cols-2 md:grid-cols-12 gap-4 items-center">
                        <div class="col-span-1 md:col-span-1">
                            <div class="h-16 w-16 bg-gray-200 rounded flex items-center justify-center">
                                <span class="text-xs text-gray-500">Img</span>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-4">
                            <h3 class="font-semibold">{{$i%2 == 0 ? 'Book Title '.$i : 'Office Supply '.$i}}</h3>
                            <p class="text-gray-600 text-sm">{{$i%2 == 0 ? 'Author '.$i : 'Brand '.$i}}</p>
                        </div>
                        <div class="col-span-1 md:col-span-2">
                            <span class="font-semibold">${{rand(10, 40)}}.99</span>
                        </div>
                        <div class="col-span-1 md:col-span-3">
                            <div class="flex items-center border rounded">
                                <button class="px-3 py-1 text-gray-600">-</button>
                                <span class="px-3 py-1 border-x">1</span>
                                <button class="px-3 py-1 text-gray-600">+</button>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 flex justify-between items-center">
                            <span class="font-semibold">${{rand(10, 40)}}.99</span>
                            <button class="text-red-600 hover:text-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
                
                <div class="p-4 flex justify-between items-center">
                    <button class="text-blue-600 hover:text-blue-800 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Continue Shopping
                    </button>
                    <button class="text-red-600 hover:text-red-800">Clear Cart</button>
                </div>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="md:w-1/3">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-4">Order Summary</h2>
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold">$89.97</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-semibold">$5.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tax</span>
                        <span class="font-semibold">$8.10</span>
                    </div>
                    <div class="border-t pt-3 flex justify-between">
                        <span class="font-bold">Total</span>
                        <span class="font-bold text-lg">$103.07</span>
                    </div>
                </div>
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Proceed to Checkout</button>
                
                <div class="mt-6">
                    <h3 class="font-semibold mb-2">Promo Code</h3>
                    <div class="flex">
                        <input type="text" placeholder="Enter promo code" class="flex-1 border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-r hover:bg-gray-300">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="bg-white rounded-lg shadow p-12 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <h2 class="text-2xl font-bold mb-2">Your cart is empty</h2>
        <p class="text-gray-600 mb-6">Looks like you haven't added any items to your cart yet.</p>
        <a href="{{ route('user.products') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block">Browse Products</a>
    </div>
    @endif
</div>
@endsection