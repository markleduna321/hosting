@extends('layouts.app')

@section('title', 'About')

@section('content')
    
        <h1> Inventory </h1>
    
    

<table class="table table-bordered">

        <thead>
            <tr>
               <th>Inventory ID</th>
                <th>Account Name</th>
               <th> Address</th> 
               <th> Contact #</th>  
               <th> Type</th>   
               <th> Status</th>   
               <th> Action</th>    
            </tr>
        </thead>

        <tbody>
             @foreach ($inventories as $inventory)
            <tr>
                <td>{{$inventory->id}}</td>
                <td><a href="{{ route('inventory.show', ['inventory' => $inventory]) }}">{{$inventory->name}}</a></td>
                <td>{{$inventory->address}}</td>
                <td>{{$inventory->phone}}</td>
                <td>{{$inventory->type}}</td>
                <td>{{$inventory->status}}</a></td>
                <td>
                @if(Auth::user()->name === 'Admin')
                    <a href="{{ route('inventory.edit', ['inventory' => $inventory]) }}"> 
                    <button class="btn btn-primary">Complete Process </button>
                @elseif($inventory->status === 'Processed')
                    <a href="{{ route('inventory.edit', ['inventory' => $inventory]) }}"> 
                    <button class="btn btn-primary" disabled>Update Inventory</button>
                @else
                    <a href="{{ route('inventory.edit', ['inventory' => $inventory]) }}"> 
                    <button class="btn btn-primary">Update Inventory</button> 
                @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{$inventories->links()}}

@endsection