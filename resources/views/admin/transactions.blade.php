@extends('layouts.admin')

@section('title', 'Transaction Management')
@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-xl font-semibold">Transaction Management</h3>
    <div class="flex space-x-4">
        <div class="relative">
            <select class="block appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500">
                <option>All Status</option>
                <option>Pending</option>
                <option>Completed</option>
                <option>Cancelled</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <input type="date" class="border border-gray-300 rounded px-3 py-2">
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Items</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td class="px-6 py-4">#ORD-00{{$i}}</td>
                    <td class="px-6 py-4">Customer {{$i}}</td>
                    <td class="px-6 py-4">2023-06-{{10+$i}}</td>
                    <td class="px-6 py-4">{{rand(1, 5)}}</td>
                    <td class="px-6 py-4">${{rand(20, 200)}}.00</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{$i%3 == 0 ? 'bg-green-100 text-green-800' : ($i%2 == 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800')}}">
                            {{$i%3 == 0 ? 'Completed' : ($i%2 == 0 ? 'Processing' : 'Shipped')}}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </button>
                        <button class="text-gray-600 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t border-gray-200">
        <div class="flex justify-between items-center">
            <div class="text-sm text-gray-600">Showing 1 to 10 of 25 entries</div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">Previous</button>
                <button class="px-3 py-1 border border-gray-300 rounded bg-blue-600 text-white">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">3</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection