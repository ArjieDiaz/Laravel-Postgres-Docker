@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="w-full my-4">
        <div class="float-left">
            <h2 class="text-2xl font-bold">Add New Product</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="flex flex-wrap">
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Name:</strong>
                <input type="text" name="name" class="w-full border rounded py-2 px-3" placeholder="Enter Name">
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Description:</strong>
                <textarea class="w-full border rounded py-2 px-3 h-40" name="description" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Price:</strong>
                <input type="number" step="0.01" name="price" class="w-full border rounded py-2 px-3" placeholder="Enter Price">
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="mb-4">
                <strong class="block mb-1">Quantity:</strong>
                <input type="number" name="quantity" class="w-full border rounded py-2 px-3" placeholder="Enter Quantity">
            </div>
        </div>
        <div class="w-full text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Submit</button>
        </div>
    </div>
</form>
@endsection