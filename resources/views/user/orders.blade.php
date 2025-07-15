@extends('layouts.user')

@section('title', 'My Orders')
@section('user-content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">My Orders</h1>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order #</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Items</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @for($i = 1; $i <= 5; $i++)
                    <tr>
                        <td class="px-6 py-4">#ORD-00{{$i}}</td>
                        <td class="px-6 py-4">2023-06-{{10+$i}}</td>
                        <td class="px-6 py-4">{{rand(1, 5)}}</td>
                        <td class="px-6 py-4">${{rand(20, 200)}}.00</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded-full {{$i%3 == 0 ? 'bg-green-100 text-green-800' : ($i%2 == 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800')}}">
                                {{$i%3 == 0 ? 'Delivered' : ($i%2 == 0 ? 'Processing' : 'Shipped')}}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.invoice') }}" class="text-blue-600 hover:text-blue-800 mr-2">View</a>
                            @if($i%3 == 0)
                            <a href="#" class="text-blue-600 hover:text-blue-800">Reorder</a>
                            @endif
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-600">Showing 1 to 5 of 5 orders</div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100" disabled>Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded bg-blue-600 text-white">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100" disabled>Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection