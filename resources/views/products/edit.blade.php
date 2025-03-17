@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="w-full lg:w-full my-4">
        <div class="float-left">
            <h2 class="text-2xl font-bold">Edit Product</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong class="font-bold">Whoops!</strong>
        <span class="block sm:inline">There were some problems with your input.</span>
        <ul class="list-disc pl-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="flex flex-wrap">
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Name">
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Description:</strong>
                <textarea class="w-full border rounded-md px-3 py-2 h-36 focus:outline-none focus:ring-2 focus:ring-blue-500" name="description" placeholder="Enter Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Price:</strong>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Price">
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Quantity:</strong>
                <input type="number" name="quantity" value="{{ $product->quantity }}" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Quantity">
            </div>
        </div>
        <div class="w-full text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Update</button>
        </div>
    </div>
</form>
@endsection