@extends('layouts.app')

@section('title', 'Admin Login')
@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-blue-600 py-4 px-6">
            <h1 class="text-2xl font-bold text-white">Admin Login</h1>
        </div>
        <div class="p-6">
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Login</button>
            </form>
            <div class="mt-4 text-center">
                <a href="{{ route('auth.login') }}" class="text-blue-600 hover:underline">Back to login selection</a>
            </div>
        </div>
    </div>
</div>
@endsection