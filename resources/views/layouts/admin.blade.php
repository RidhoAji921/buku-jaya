@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <div class="p-4 border-b border-gray-700">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
        </div>
        <nav class="mt-4">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">Dashboard</a>
            <a href="{{ route('admin.products') }}" class="block py-2 px-4 hover:bg-gray-700 {{ request()->routeIs('admin.products') ? 'bg-gray-700' : '' }}">Products</a>
            <a href="{{ route('admin.transactions') }}" class="block py-2 px-4 hover:bg-gray-700 {{ request()->routeIs('admin.transactions') ? 'bg-gray-700' : '' }}">Transactions</a>
            <a href="{{ route('admin.invoices') }}" class="block py-2 px-4 hover:bg-gray-700 {{ request()->routeIs('admin.invoices') ? 'bg-gray-700' : '' }}">Invoices</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm">
            <div class="flex justify-between items-center px-6 py-4">
                <h2 class="text-xl font-semibold">@yield('title')</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Admin User</span>
                    <button class="text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('admin-content')
        </main>
    </div>
</div>
@endsection