@extends('layouts.user')

@section('title', 'Invoice')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto">
        <!-- Invoice Header -->
        <div class="p-6 bg-gray-50 border-b">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Invoice #INV-00123</h1>
                    <p class="text-gray-600">Date: June 15, 2023</p>
                    <p class="text-gray-600">Status: <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Paid</span></p>
                </div>
                <div class="text-right">
                    <h2 class="text-xl font-bold">Buku Jaya</h2>
                    <p class="text-gray-600">123 Book Street</p>
                    <p class="text-gray-600">Reading, BK 12345</p>
                    <p class="text-gray-600">contact@Buku Jaya.com</p>
                </div>
            </div>
        </div>
        
        <!-- Customer Info -->
        <div class="p-6 border-b">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Billed To</h3>
                    <p class="font-medium">John Doe</p>
                    <p class="text-gray-600">123 Customer Ave</p>
                    <p class="text-gray-600">New York, NY 10001</p>
                    <p class="text-gray-600">john.doe@example.com</p>
                    <p class="text-gray-600">(123) 456-7890</p>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-2">Shipping Info</h3>
                    <p class="font-medium">John Doe</p>
                    <p class="text-gray-600">123 Customer Ave</p>
                    <p class="text-gray-600">New York, NY 10001</p>
                    <p class="text-gray-600">Shipping Method: Standard</p>
                    <p class="text-gray-600">Tracking #: SH-123456789</p>
                </div>
            </div>
        </div>
        
        <!-- Order Items -->
        <div class="p-6 border-b">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Item</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Qty</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 bg-gray-200 rounded mr-3 flex-shrink-0"></div>
                                    <div>
                                        <p class="font-medium">Book Title 1</p>
                                        <p class="text-gray-600 text-sm">Author 1</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">$24.99</td>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">$24.99</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 bg-gray-200 rounded mr-3 flex-shrink-0"></div>
                                    <div>
                                        <p class="font-medium">Office Supply 1</p>
                                        <p class="text-gray-600 text-sm">Brand 1</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">$12.99</td>
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">$25.98</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Totals -->
        <div class="p-6">
            <div class="flex justify-end">
                <div class="w-64">
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-medium">$50.97</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-medium">$5.00</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Tax</span>
                        <span class="font-medium">$4.60</span>
                    </div>
                    <div class="flex justify-between py-2 border-t border-gray-200 mt-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">$60.57</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="p-6 bg-gray-50 border-t">
            <div class="flex justify-between items-center">
                <p class="text-gray-600">Thank you for your purchase!</p>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Print Invoice</button>
            </div>
        </div>
    </div>
    
    <div class="mt-6 text-center">
        <a href="{{ route('user.orders') }}" class="text-blue-600 hover:underline">Back to Orders</a>
    </div>
</div>
@endsection