@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
    <h1> Add New Product </h1>

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">

        @include('product.form')
            
        <button type="submit" class="btn btn-primary">Add Product</button>

    </form>

    <hr>
@endsection