@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('admin-content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-2">Total Products</h3>
        <p class="text-3xl font-bold text-blue-600">125</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-2">Today's Sales</h3>
        <p class="text-3xl font-bold text-green-600">$1,245</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-2">Pending Orders</h3>
        <p class="text-3xl font-bold text-yellow-600">8</p>
    </div>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <h3 class="text-lg font-semibold mb-4">Recent Transactions</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @for($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="px-6 py-4">#ORD-00{{$i}}</td>
                    <td class="px-6 py-4">Customer {{$i}}</td>
                    <td class="px-6 py-4">2023-06-{{10+$i}}</td>
                    <td class="px-6 py-4">${{rand(20, 200)}}.00</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{$i%3 == 0 ? 'bg-green-100 text-green-800' : ($i%2 == 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800')}}">
                            {{$i%3 == 0 ? 'Completed' : ($i%2 == 0 ? 'Processing' : 'Shipped')}}
                        </span>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection