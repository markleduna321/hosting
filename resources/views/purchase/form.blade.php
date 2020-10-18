    @csrf

    @foreach($accounts as $account)
        
        
            <input type="hidden" name="user_email" value="{{ Auth::user()->email }}" class="form-control">
            <div>{{ $errors->first('user_email') }}</div>

        <div class="form-group pb-3">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{$account->name}}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group pb-3">
            <label for="address">Generic Name:</label>
            <input type="text" name="address" value="{{$account->address}}" class="form-control">
            <div>{{ $errors->first('address') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{$account->type}}" class="form-control">
            <div>{{ $errors->first('type') }}</div>
        </div>

    @endforeach
        
        <div class="form-group pb-3">
            <label for="conact">Contact Person:</label>
            <input type="text" name="contact" value="{{old('contact') ?? $purchase->contact}} " class="form-control">
            <div>{{ $errors->first('contact') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="phone">Contact #:</label>
            <input type="text" name="phone" value="{{old('phone') ?? $purchase->phone}}" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="status">Status:</label>
            <input type="text" name="status" value="Pending" class="form-control" readonly>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <table width="50%" border="3" cellpadding="0" cellspacing="0" class="tabla"   style="position:relative;left:50px;">
        <tr>
        <th style=" background-color:#4CAF50;">Product</th>
        <th style=" background-color:#4CAF50;">Amount</th>
        <th style=" background-color:#4CAF50;">Price</th>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product" id="product" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product2" id="product2" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount2" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price2" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product3" id="product3" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount3" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price3" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product4" id="product4" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount4" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price4" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product5" id="product5" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount5" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price5" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product6" id="product6" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount6" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price6" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product7" id="product7" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount7" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price7" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product8" id="product8" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount8" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price8" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product9" id="product9" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount9" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price9" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
            <select name="product10" id="product10" style="border:0; font-size:16px;width:350px;">
            <option value=""></option>
            @foreach ($products as $product)
                    <option value="{{$product->gname}} -- {{$product->bname}}"> {{$product->gname}} -- {{$product->bname}} </option>
            @endforeach
            </select>
        </td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount10" value=""></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price10" value=""></td>
        </tr>

        <tr>
        <th></th>
        <th>Total</th>
        <th><input type="number" style="border:0; font-size:16px;" name="total" value=""></th>
        </tr>

        </table>
