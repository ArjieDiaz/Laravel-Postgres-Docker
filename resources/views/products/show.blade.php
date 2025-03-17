@extends('layouts.app')

@section('content')
<div class="flex flex-wrap w-full mb-6">
    <div class="w-full">
        <div class="text-left">
            <h2 class="text-2xl font-bold">Product Details</h2>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-6">
        <h5 class="text-xl font-bold mb-2">{{ $product->name }}</h5>
        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
        <ul class="divide-y divide-gray-200 border-t border-b border-gray-200">
            <li class="py-3 px-4"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</li>
            <li class="py-3 px-4"><strong>Quantity:</strong> {{ $product->quantity }}</li>
            <li class="py-3 px-4"><strong>Created:</strong> {{ $product->created_at->format('d M Y') }}</li>
            <li class="py-3 px-4"><strong>Last Updated:</strong> {{ $product->updated_at->format('d M Y') }}</li>
        </ul>
    </div>
</div>

<div class="mt-3 space-x-2">
    <a href="{{ route('products.edit', $product->id) }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('products.index') }}" class="inline-block bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">Back to List</a>
</div>
@endsection