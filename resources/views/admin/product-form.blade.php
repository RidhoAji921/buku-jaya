@extends('layouts.admin')

@section('title', 'Product Form')
@section('admin-content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">@yield('form-title', 'Add New Product')</h2>
        <a href="{{ route('admin.products') }}" class="text-blue-600 hover:text-blue-800">
            ← Back to Products
        </a>
    </div>
    
    <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Product Name*</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="category" class="block text-gray-700 font-medium mb-2">Category*</label>
                <select id="category" name="category" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Select Category</option>
                    <option value="books">Books</option>
                    <option value="office-supplies">Office Supplies</option>
                    <option value="stationery">Stationery</option>
                </select>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div>
                <label for="price" class="block text-gray-700 font-medium mb-2">Price*</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="stock" class="block text-gray-700 font-medium mb-2">Stock Quantity*</label>
                <input type="number" id="stock" name="stock" min="0" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="sku" class="block text-gray-700 font-medium mb-2">SKU Code</label>
                <input type="text" id="sku" name="sku"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
        </div>
        
        <div class="mb-6">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea id="description" name="description" rows="4"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
        </div>
        
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2">Product Images</label>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="mt-2 text-gray-600">Drag and drop your images here, or click to browse</p>
                <input type="file" name="images[]" multiple class="hidden">
                <button type="button" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Select Files
                </button>
            </div>
            <p class="mt-2 text-sm text-gray-500">Upload up to 5 images (JPEG, PNG, max 2MB each)</p>
        </div>
        
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.products') }}" class="border border-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-100 transition">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Save Product
            </button>
        </div>
    </form>
</div>
@endsection