<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="my-6">
            <div class="w-full">
                <h2 class="text-2xl font-bold">Products</h2>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="mb-6 text-right">
            <a class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded" href="{{ route('products.create') }}">Add New Product</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 border border-gray-300">No</th>
                        <th class="px-6 py-3 border border-gray-300">Name</th>
                        <th class="px-6 py-3 border border-gray-300">Description</th>
                        <th class="px-6 py-3 border border-gray-300">Price</th>
                        <th class="px-6 py-3 border border-gray-300">Quantity</th>
                        <th class="px-6 py-3 border border-gray-300 w-[280px]">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border border-gray-300">{{ $product->id }}</td>
                        <td class="px-6 py-4 border border-gray-300">{{ $product->name }}</td>
                        <td class="px-6 py-4 border border-gray-300">{{ $product->description }}</td>
                        <td class="px-6 py-4 border border-gray-300">${{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-4 border border-gray-300">{{ $product->quantity }}</td>
                        <td class="px-6 py-4 border border-gray-300">
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="flex space-x-2">
                                <a class="px-2 py-1 bg-blue-400 hover:bg-blue-500 text-white rounded text-sm" href="{{ route('products.show',$product->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="px-2 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded text-sm" href="{{ route('products.edit',$product->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
    @endsection
</body>
</html>