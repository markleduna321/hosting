@extends('layouts.app')

@section('title', 'Deatails for ' . $product->gname)

@section('content')
    <h1> Deatails for {{ $product->gname }} </h1>
    @if(Auth::user()->name === 'Admin')
        <a href="{{ route('product.edit', ['product' => $product]) }}"> 
    <button class="btn btn-primary">Edit </button> </a>
    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
    @else
        
    @endif
 
    <div class="row">
        <div class="col-12">
            <p><strong>Generic Name : </strong> {{$product->gname}} </p>
            <p><strong>Brand Name : </strong> {{$product->bname}} </p>  
            <p><strong>Stock : </strong> {{$product->qty}} </p>  
            <p><strong>New Stock : </strong> {{$product->newqty}} </p>  
            <p><strong>Last Delivery: </strong> {{$product->productorder}} </p>  
        </div>
    </div>

    @if($product->image)
        <div class="row">
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image2)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image3)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image4)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image5)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image6)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image7)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image8)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image9)}}" alt="" class="img-thumbnail">
        </div>
        <div class="col-12">
            <img src="{{ asset('storage/' . $product->image10)}}" alt="" class="img-thumbnail">
        </div>
        </div>
    @endif

@endsection