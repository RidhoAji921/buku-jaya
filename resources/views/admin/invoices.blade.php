@extends('layouts.admin')

@section('title', 'Invoice Management')
@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-xl font-semibold">Invoice Management</h3>
    <div class="flex space-x-4">
        <input type="text" placeholder="Search invoice..." class="border border-gray-300 rounded px-3 py-2">
        <input type="date" class="border border-gray-300 rounded px-3 py-2">
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Invoice No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td class="px-6 py-4">#INV-00{{$i}}</td>
                    <td class="px-6 py-4">#ORD-00{{$i}}</td>
                    <td class="px-6 py-4">Customer {{$i}}</td>
                    <td class="px-6 py-4">2023-06-{{15+$i}}</td>
                    <td class="px-6 py-4">${{rand(50, 300)}}.00</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{$i%2 == 0 ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}}">
                            {{$i%2 == 0 ? 'Paid' : 'Pending'}}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="text-gray-600 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection