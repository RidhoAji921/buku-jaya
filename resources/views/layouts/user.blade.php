@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('user.home') }}" class="text-xl font-bold text-blue-600">BookStore</a>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('user.products') }}" class="text-gray-600 hover:text-blue-600">Products</a>
                    <a href="{{ route('user.cart') }}" class="text-gray-600 hover:text-blue-600">Cart</a>
                    <div class="relative">
                        <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                            <span>Account</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Orders</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('user-content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">BookStore</h3>
                    <p class="text-gray-400">Your one-stop shop for books and office supplies.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact Us</h4>
                    <p class="text-gray-400">Email: info@bookstore.com</p>
                    <p class="text-gray-400">Phone: (123) 456-7890</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2023 BookStore. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
@endsection