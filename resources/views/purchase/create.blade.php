@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <h1> Request Order</h1>

    <div class="form-group pb-3">
        <form action="/search" method="get">
            <label for="search">Generate Account Data:</label>
            <div class="input-group">
                <select name="search" class="form-control">
                <option value=""> </option>
                 @foreach ($accounts as $account)
                    <option value="{{$account->name}}"> {{$account->name}}</option>
                @endforeach
                </select>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </span>
            </div>
        </form>    
        </div>
        
    <form action="{{ route('purchase.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">

        @include('purchase.form')
        
            
        <button type="submit" class="btn btn-primary">Send Request</button>

    </form>
    <hr>
@endsection