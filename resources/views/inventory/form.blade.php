    @csrf
       
            Account Name: 
            <input type="text" name="name" value="{{$inventory->name}}"  style="border:0; font-size:16px;width:350px;" readonly>

            Date: 
            <input type="text" name="" value="{{$inventory->created_at}}"  style="border:0; font-size:16px;width:350px;" readonly>
            <br>
            Address: 
            <input type="text" name="address" value="{{$inventory->address}}"  style="border:0; font-size:16px;width:350px;" readonly>
            <input type="hidden" name="status" value="Completed">
            <input type="hidden" name="id" value="{{ $inventory->id }}">
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
        <td><input type="number" style="border:0; font-size:16px;" name="endinv" value="{{$inventory->endinv}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel" value="{{$inventory->newdel}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum" value="{{$inventory->invnum}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock" value="{{$inventory->totalstock}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft" value="{{$inventory->stockleft}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold" value="{{$inventory->stocksold}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price" value="{{$inventory->price}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount" value="{{$inventory->amount}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product2" value="{{$inventory->product2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv2" value="{{$inventory->endinv2}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel2" value="{{$inventory->newdel2}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum2" value="{{$inventory->invnum2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock2" value="{{$inventory->totalstock2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft2" value="{{$inventory->stockleft2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold2" value="{{$inventory->stocksold2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price2" value="{{$inventory->price2}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount2" value="{{$inventory->amount2}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product3" value="{{$inventory->product3}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv3" value="{{$inventory->endinv3}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel3" value="{{$inventory->newdel3}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum3" value="{{$inventory->invnum3}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock3" value="{{$inventory->totalstock3}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft3" value="{{$inventory->stockleft3}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold3" value="{{$inventory->stocksold3}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price3" value="{{$inventory->price3}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount3" value="{{$inventory->amount3}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product4" value="{{$inventory->product4}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv4" value="{{$inventory->endinv4}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel4" value="{{$inventory->newdel4}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum4" value="{{$inventory->invnum4}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock4" value="{{$inventory->totalstock4}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft4" value="{{$inventory->stockleft4}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold4" value="{{$inventory->stocksold4}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price4" value="{{$inventory->price4}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount4" value="{{$inventory->amount4}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product5" value="{{$inventory->product5}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv5" value="{{$inventory->endinv5}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel5" value="{{$inventory->newdel5}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum5" value="{{$inventory->invnum5}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock5" value="{{$inventory->totalstock5}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft5" value="{{$inventory->stockleft5}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold5" value="{{$inventory->stocksold5}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price5" value="{{$inventory->price5}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount5" value="{{$inventory->amount5}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product6" value="{{$inventory->product6}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv6" value="{{$inventory->endinv6}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel6" value="{{$inventory->newdel6}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum6" value="{{$inventory->invnum6}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock6" value="{{$inventory->totalstock6}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft6" value="{{$inventory->stockleft6}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold6" value="{{$inventory->stocksold6}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price6" value="{{$inventory->price6}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount6" value="{{$inventory->amount6}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product7" value="{{$inventory->product7}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv7" value="{{$inventory->endinv7}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel7" value="{{$inventory->newdel7}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum7" value="{{$inventory->invnum7}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock7" value="{{$inventory->totalstock7}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft7" value="{{$inventory->stockleft7}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold7" value="{{$inventory->stocksold7}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price7" value="{{$inventory->price7}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount7" value="{{$inventory->amount7}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product8" value="{{$inventory->product8}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv8" value="{{$inventory->endinv8}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel8" value="{{$inventory->newdel8}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum8" value="{{$inventory->invnum8}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock8" value="{{$inventory->totalstock8}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft8" value="{{$inventory->stockleft8}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold8" value="{{$inventory->stocksold8}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price8" value="{{$inventory->price8}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount8" value="{{$inventory->amount8}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product9" value="{{$inventory->product9}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv9" value="{{$inventory->endinv9}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel9" value="{{$inventory->newdel9}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum9" value="{{$inventory->invnum9}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock9" value="{{$inventory->totalstock9}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft9" value="{{$inventory->stockleft9}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold9" value="{{$inventory->stocksold9}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price9" value="{{$inventory->price9}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount9" value="{{$inventory->amount9}}"></td>
        </tr>

        <tr style=" background-color:white;">
        <td><input type="text" style="border:0; font-size:16px;" name="product10" value="{{$inventory->product10}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="endinv10" value="{{$inventory->endinv10}}" readonly></td>
        <td><input type="number" style="border:0; font-size:16px;" name="newdel10" value="{{$inventory->newdel10}}"></td>
        <td><input type="text" style="border:0; font-size:16px;" name="invnum10" value="{{$inventory->invnum10}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="totalstock10" value="{{$inventory->totalstock10}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stockleft10" value="{{$inventory->stockleft10}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="stocksold10" value="{{$inventory->stocksold10}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="price10" value="{{$inventory->price10}}"></td>
        <td><input type="number" style="border:0; font-size:16px;" name="amount10" value="{{$inventory->amount10}}"></td>
        </tr>

        <tr>
        <th colspan="8" style="text-align:center;">Total:</th>
        <th></th>
        </tr>

        </table>
       
