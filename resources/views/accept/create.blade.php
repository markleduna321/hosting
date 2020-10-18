@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <h1> Accept Order</h1>

    <div class="form-group pb-3">
        <form action="/searches" method="get">
            <label for="search">Generate PO Data:</label>
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </span>
            </div>
        </form>    
        </div>
    
               
    <form action="{{ route('accept.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">
       @foreach ($purchases as $purchase) 
            @csrf

            <input type="hidden" name="user_email" value="{{$purchase->user_email}}" class="form-control" readonly>
       
            <input type="hidden" name="id" value="{{$purchase->id}}" class="form-control" readonly>
        
        <div class="form-group pb-3">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{$purchase->name}}" class="form-control" readonly>
            <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group pb-3">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$purchase->address}}" class="form-control" readonly>
            <div>{{ $errors->first('address') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{$purchase->type}}" class="form-control" readonly>
            <div>{{ $errors->first('type') }}</div>
        </div>
        
        <div class="form-group pb-3">
            <label for="conact">Contact Person:</label>
            <input type="text" name="contact" value="{{$purchase->contact}} " class="form-control" readonly>
            <div>{{ $errors->first('contact') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="phone">Contact #:</label>
            <input type="text" name="phone" value="{{$purchase->phone}}" class="form-control" readonly>
            <div>{{ $errors->first('phone') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="status">Status:</label>
            <input type="text" name="status" value="Processed" class="form-control" readonly>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <table width="50%" border="3" cellpadding="0" cellspacing="0" class="tabla"   style="position:relative;left:50px;">
        <tr>
        <th style=" background-color:#4CAF50;">Product</th>
        <th style=" background-color:#4CAF50;">amount</th>
        <th style=" background-color:#4CAF50;">Price</th>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product" value="{{$purchase->product}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel" value="{{$purchase->amount}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price" value="{{$purchase->price}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product2" value="{{$purchase->product2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel2" value="{{$purchase->amount2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price2" value="{{$purchase->price2}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product3" value="{{$purchase->product3}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel3" value="{{$purchase->amount3}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price3" value="{{$purchase->price3}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product4" value="{{$purchase->product4}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel4" value="{{$purchase->amount4}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price4" value="{{$purchase->price4}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product5" value="{{$purchase->product5}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel5" value="{{$purchase->amount5}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price5" value="{{$purchase->price5}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product6" value="{{$purchase->product6}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel6" value="{{$purchase->amount6}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price6" value="{{$purchase->price6}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product7" value="{{$purchase->product7}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel7" value="{{$purchase->amount7}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price7" value="{{$purchase->price7}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product8" value="{{$purchase->product8}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel8" value="{{$purchase->amount8}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price8" value="{{$purchase->price8}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product9" value="{{$purchase->product9}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel9" value="{{$purchase->amount9}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price9" value="{{$purchase->price9}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;width:350px;" name="product10" value="{{$purchase->product10}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel10" value="{{$purchase->amount10}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price10" value="{{$purchase->price10}}" readonly></td>
        </tr>

        <tr>
        <th></th>
        <th>Total</th>
        <th><input type="number" style="border:0; font-size:16px;" name="total" value="{{$purchase->total}}" readonly></th>
        </tr>

        </table>

            
        <button type="submit" class="btn btn-primary">Accept Order</button>
         @endforeach
    </form>

   

   <table class="table table-bordered">

        <thead>
            <tr>
               <th>Purchase ID</th>
                <th>Account Name</th>
               <th> Address</th> 
               <th> Type</th>   
               <th> Status</th>    
            </tr>
        </thead>

        <tbody>
             @foreach ($lemons as $lemon)
            <tr>
            @if ($lemon->status === 'Pending')
                <td>{{$lemon->id}}</td>
                <td>{{$lemon->name}}</a></td>
                <td>{{$lemon->address}}</td>
                <td>{{$lemon->type}}</td>
                <td>{{$lemon->status}}</td>
            @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
@endsection