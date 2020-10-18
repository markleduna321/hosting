@extends('layouts.app')

@section('title', 'Edit Details for ' . $product->gname)

@section('content')
    <h1> Edit Details for {{ $product->gname }} </h1>

    <form action="{{ route('product.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data" class="pb-3">
        @method('PATCH')
        @include('product.form')
            
        <button type="submit" class="btn btn-primary">Save Product</button>

    </form>

    <hr>
@endsection