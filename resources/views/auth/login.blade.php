@extends('layouts.app')

@section('title', 'Login')
@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-blue-600 py-4 px-6">
            <h1 class="text-2xl font-bold text-white">Login to Buku Jaya</h1>
        </div>
        <div class="p-6">
            <div class="mb-8 text-center">
                <h2 class="text-xl font-semibold mb-4">Select Login Type</h2>
                <div class="flex flex-col gap-4">
                    <a href="{{ route('auth.admin.login') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Admin Login</a>
                    <a href="{{ route('auth.user.login') }}" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-300 transition">User Login</a>
                </div>
            </div>
            <p class="text-center text-gray-600">Don't have an account? <a href="{{ route('user.products') }}" class="text-blue-600 hover:underline">Continue as guest</a></p>
        </div>
    </div>
</div>
@endsection