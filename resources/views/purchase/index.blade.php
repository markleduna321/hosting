@extends('layouts.app')

@section('title', 'About')

@section('content')
    
        <h1> Request Orders </h1>
    <p><a href="{{ route('purchase.create') }}"> <button class="btn btn-primary">Send Request</button> </a>
    @can('create', App\Models\Product::class)
    <a href="{{ route('accept.create')}}"> 
    <button class="btn btn-success">Accept Request </button> </a></p>
    @endcan
<table class="table table-bordered">

        <thead>
            <tr>
               <th>Purchase ID</th>
                <th>Account Name</th>
               <th> Address</th> 
               <th> Contact #</th>  
               <th> Type</th>   
                 
            </tr>
        </thead>

        <tbody>
             @foreach ($purchases as $purchase)
            <tr>
                <td>{{$purchase->id}}</td>
                <td><a href="{{ route('purchase.show', ['purchase' => $purchase]) }}">{{$purchase->name}}</a></td>
                <td>{{$purchase->address}}</td>
                <td>{{$purchase->phone}}</td>
                <td>{{$purchase->type}}</td>
               

            </tr>
            @endforeach
        </tbody>
    </table>


@endsection