@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <h1> Products </h1>
    @can('create', App\Models\Product::class)
    <p><a href="{{ route('product.create') }}"> <button class="btn btn-primary">Add Product</button> </a></p>
    @endcan
<table class="table table-bordered">

        <thead>
            <tr>
               <th> ID</th>
                <th>Generic Name</th>
               <th> Brand Name</th>
               <th> Stock</th>  
               @if(Auth::user()->name === 'Admin')
                   <th> Options</th>    
               @else
                   
               @endif
               
            </tr>
        </thead>

        <tbody>
             @foreach ($products as $product)
            <tr>
    
               <td> {{$product->id}}</td>
                <td><a href="{{ route('product.show', ['product' => $product]) }}">{{$product->gname}}</a></td>
               <td><a href="{{ route('product.show', ['product' => $product]) }}">{{$product->bname}}</a></td>
               <td>{{$product->qty}}</td>
               
                @if(Auth::user()->name === 'Admin')
                    <td>
                   <div class="input-group">
                    <p><a href="{{ route('product.edit', ['product' => $product]) }}">
                    <button class="btn btn-primary"> Edit</button> </a></p>
                    <span class="input-group-btn">
                    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger"> Delete </button> 
                    </form>
                    </span>
                    </div>
                    </td>
                @else
                    
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection