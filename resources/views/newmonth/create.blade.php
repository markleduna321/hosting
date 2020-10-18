@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <h1> New Inventory </h1>
<form action="{{ route('newmonth.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">
            
    @foreach ($inventories as $inventory)
@csrf

<input type="text" name="user_email" value="{{$inventory->user_email}}">
<input type="text" name="phone" value="{{$inventory->phone}}">
<input type="text" name="type" value="{{$inventory->type}}">
<input type="text" name="contact" value="{{$inventory->contact}}">
<input type="text" name="total" value="{{$inventory->total}}">
<input type="text" name="status" value="Processed">
            Account Name: 
            <input type="text" name="name" value="{{$inventory->name}}"  style="border:0; font-size:16px;width:350px;" readonly>

            Address: 
            <input type="text" name="address" value="{{$inventory->address}}"  style="border:0; font-size:16px;width:350px;" readonly>

        <table border="3" cellpadding="0" cellspacing="0" class="tabla">
        <tr>
        <th style=" background-color:#4CAF50;">Product</th>
        <th style=" background-color:#4CAF50;">END INV</th>
        <th style=" background-color:#4CAF50;">New Delivery</th>
        <th style=" background-color:#4CAF50;">DR/INV #</th>
        <th style=" background-color:#4CAF50;">Total Stocks</th>
        <th style=" background-color:#4CAF50;">Stocks On Hand</th>
        <th style=" background-color:#4CAF50;">Stocks Sold</th>
        <th style=" background-color:#4CAF50;">Price</th>
        <th style=" background-color:#4CAF50;">Amount</th>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product" value="{{$inventory->product}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv" value="{{$inventory->totalstock}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel" value=""></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price" value="{{$inventory->price}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product2" value="{{$inventory->product2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv2" value="{{$inventory->stockleft2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel2" value=""></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum2" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock2" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft2" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold2" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price2" value="{{$inventory->price2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount2" value=""></td>
        </tr>



        <tr>
        <th colspan="8" style="text-align:center;">Total:</th>
        <th></th>
        </tr>

        </table>
        

    <button type="submit" class="btn btn-primary">Save</button>
         
    </form>
    @endforeach
@endsection