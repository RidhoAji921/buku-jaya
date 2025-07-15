@extends('layouts.user')

@section('title', 'Checkout')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Checkout</h1>
    
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Checkout Form -->
        <div class="lg:w-2/3">
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">Shipping Information</h2>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="first-name" class="block text-gray-700 mb-1">First Name</label>
                            <input type="text" id="first-name" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="last-name" class="block text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="last-name" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 mb-1">Address</label>
                        <input type="text" id="address" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label for="city" class="block text-gray-700 mb-1">City</label>
                            <input type="text" id="city" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="state" class="block text-gray-700 mb-1">State/Province</label>
                            <input type="text" id="state" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="zip" class="block text-gray-700 mb-1">ZIP/Postal Code</label>
                            <input type="text" id="zip" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="country" class="block text-gray-700 mb-1">Country</label>
                        <select id="country" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>United Kingdom</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" id="phone" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                </form>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-4">Payment Method</h2>
                <div class="space-y-4">
                    <div class="flex items-center border rounded-lg p-4">
                        <input type="radio" id="credit-card" name="payment" class="h-4 w-4 text-blue-600 focus:ring-blue-500" checked>
                        <label for="credit-card" class="ml-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="ml-2">Credit Card</span>
                        </label>
                    </div>
                    
                    <div class="border rounded-lg p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="card-number" class="block text-gray-700 mb-1">Card Number</label>
                                <input type="text" id="card-number" placeholder="1234 5678 9012 3456" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="card-name" class="block text-gray-700 mb-1">Name on Card</label>
                                <input type="text" id="card-name" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="expiry" class="block text-gray-700 mb-1">Expiry Date</label>
                                <input type="text" id="expiry" placeholder="MM/YY" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="cvv" class="block text-gray-700 mb-1">CVV</label>
                                <input type="text" id="cvv" placeholder="123" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center border rounded-lg p-4">
                        <input type="radio" id="paypal" name="payment" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <label for="paypal" class="ml-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            <span class="ml-2">PayPal</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="lg:w-1/3">
            <div class="bg-white rounded-lg shadow p-6 sticky top-4">
                <h2 class="text-xl font-bold mb-4">Order Summary</h2>
                
                <div class="space-y-4 mb-6">
                    @for($i = 1; $i <= 2; $i++)
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-16 w-16 bg-gray-200 rounded mr-4 flex items-center justify-center">
                                <span class="text-xs text-gray-500">Img</span>
                            </div>
                            <div>
                                <h3 class="font-semibold">{{$i%2 == 0 ? 'Book Title '.$i : 'Office Supply '.$i}}</h3>
                                <p class="text-gray-600 text-sm">Qty: 1</p>
                            </div>
                        </div>
                        <span class="font-semibold">${{rand(15, 40)}}.99</span>
                    </div>
                    @endfor
                </div>
                
                <div class="border-t pt-4 mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold">$69.98</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-semibold">$5.00</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Tax</span>
                        <span class="font-semibold">$6.30</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg pt-2">
                        <span>Total</span>
                        <span>$81.28</span>
                    </div>
                </div>
                
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mb-4">Place Order</button>
                
                <p class="text-sm text-gray-600 text-center">By placing your order, you agree to our <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection