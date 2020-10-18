@extends('layouts.app')

@section('title', 'Deatails for ' . $inventory->name)

@section('content')
    <h1> Deatails for {{ $inventory->name }} </h1>

    @if(Auth::user()->name === 'Admin')
    <form action="{{ route('inventory.destroy', ['inventory' => $inventory]) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
    @endif

 </br>
        <div class="form-group pb-3">
            <form action="/searchmonth" method="get">
            <div class="input-group">
                <input type="hidden" name="search" value="{{$inventory->id}}" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">New Inventory</button>
                    </span>
            </div>
            </form>    
        </div>
        <input type="button" onclick="printDiv('print-content')" value="Print" class="btn btn-success"/>
        <div id="print-content">
        
            Account Name: 
            <input type="text" name="name" value="{{$inventory->name}}"  style="border:0; font-size:16px;width:350px;" readonly>

            Date: 
            <input type="text" name="" value="{{$inventory->created_at}}"  style="border:0; font-size:16px;width:350px;" readonly>
            <br>
            Address: 
            <input type="text" name="address" value="{{$inventory->address}}"  style="border:0; font-size:16px;width:350px;" readonly>
            <input type="hidden" name="status" value="Completed">
            <input type="hidden" name="id" value="{{$inventory->id}}">
        <table border="3" cellpadding="0" cellspacing="0" class="tabla">
        <tr>
        <th style=" background-color:#4CAF50;width:20%;text-align:center"> Product </th>
        <th style=" background-color:#4CAF50;width:10%;text-align:center">END INV</th>
        <th style=" background-color:#4CAF50;width:10%;text-align:center">New Delivery</th>
        <th style=" background-color:#4CAF50;width:10%;text-align:center">DR/INV #</th>
        <th style=" background-color:#4CAF50;width:5%;text-align:center">Total Stocks</th>
        <th style=" background-color:#4CAF50;width:5%;text-align:center">Stocks On Hand</th>
        <th style=" background-color:#4CAF50;width:5%;text-align:center">Stocks Sold</th>
        <th style=" background-color:#4CAF50;width:10%;text-align:center">Price</th>
        <th style=" background-color:#4CAF50;width:15%;text-align:center">Amount</th>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product}}</td>
        <td>{{$inventory->endinv}}</td>
        <td>{{$inventory->newdel}}</td>
        <td>{{$inventory->invnum}}</td>
        <td>{{$inventory->totalstock}}</td>
        <td>{{$inventory->stockleft}}</td>
        <td>{{$inventory->stocksold}}</td>
        <td>{{$inventory->price}}</td>
        <td>{{$inventory->amount}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product2}}</td>
        <td>{{$inventory->endinv2}}</td>
        <td>{{$inventory->newdel2}}</td>
        <td>{{$inventory->invnum2}}</td>
        <td>{{$inventory->totalstock2}}</td>
        <td>{{$inventory->stockleft2}}</td>
        <td>{{$inventory->stocksold2}}</td>
        <td>{{$inventory->price2}}</td>
        <td>{{$inventory->amount2}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product3}}</td>
        <td>{{$inventory->endinv3}}</td>
        <td>{{$inventory->newdel3}}</td>
        <td>{{$inventory->invnum3}}</td>
        <td>{{$inventory->totalstock3}}</td>
        <td>{{$inventory->stockleft3}}</td>
        <td>{{$inventory->stocksold3}}</td>
        <td>{{$inventory->price3}}</td>
        <td>{{$inventory->amount3}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product4}}</td>
        <td>{{$inventory->endinv4}}</td>
        <td>{{$inventory->newdel4}}</td>
        <td>{{$inventory->invnum4}}</td>
        <td>{{$inventory->totalstock4}}</td>
        <td>{{$inventory->stockleft4}}</td>
        <td>{{$inventory->stocksold4}}</td>
        <td>{{$inventory->price4}}</td>
        <td>{{$inventory->amount4}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product5}}</td>
        <td>{{$inventory->endinv5}}</td>
        <td>{{$inventory->newdel5}}</td>
        <td>{{$inventory->invnum5}}</td>
        <td>{{$inventory->totalstock5}}</td>
        <td>{{$inventory->stockleft5}}</td>
        <td>{{$inventory->stocksold5}}</td>
        <td>{{$inventory->price5}}</td>
        <td>{{$inventory->amount5}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product6}}</td>
        <td>{{$inventory->endinv6}}</td>
        <td>{{$inventory->newdel6}}</td>
        <td>{{$inventory->invnum6}}</td>
        <td>{{$inventory->totalstock6}}</td>
        <td>{{$inventory->stockleft6}}</td>
        <td>{{$inventory->stocksold6}}</td>
        <td>{{$inventory->price6}}</td>
        <td>{{$inventory->amount6}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product7}}</td>
        <td>{{$inventory->endinv7}}</td>
        <td>{{$inventory->newdel7}}</td>
        <td>{{$inventory->invnum7}}</td>
        <td>{{$inventory->totalstock7}}</td>
        <td>{{$inventory->stockleft7}}</td>
        <td>{{$inventory->stocksold7}}</td>
        <td>{{$inventory->price7}}</td>
        <td>{{$inventory->amount7}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product8}}</td>
        <td>{{$inventory->endinv8}}</td>
        <td>{{$inventory->newdel8}}</td>
        <td>{{$inventory->invnum8}}</td>
        <td>{{$inventory->totalstock8}}</td>
        <td>{{$inventory->stockleft8}}</td>
        <td>{{$inventory->stocksold8}}</td>
        <td>{{$inventory->price8}}</td>
        <td>{{$inventory->amount8}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product9}}</td>
        <td>{{$inventory->endinv9}}</td>
        <td>{{$inventory->newdel9}}</td>
        <td>{{$inventory->invnum9}}</td>
        <td>{{$inventory->totalstock9}}</td>
        <td>{{$inventory->stockleft9}}</td>
        <td>{{$inventory->stocksold9}}</td>
        <td>{{$inventory->price9}}</td>
        <td>{{$inventory->amount9}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$inventory->product10}}</td>
        <td>{{$inventory->endinv10}}</td>
        <td>{{$inventory->newdel10}}</td>
        <td>{{$inventory->invnum10}}</td>
        <td>{{$inventory->totalstock10}}</td>
        <td>{{$inventory->stockleft10}}</td>
        <td>{{$inventory->stocksold10}}</td>
        <td>{{$inventory->price10}}</td>
        <td>{{$inventory->amount10}}</td>
        </tr>

        <tr>
        <th colspan="8" style="text-align:center"> Total: </th>
        <th></th>
        </tr>

        </table>
       </div>




@endsection