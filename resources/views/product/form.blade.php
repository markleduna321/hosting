    @csrf
        <div class="form-group pb-3">
            <label for="gname">Generic Name:</label>
            <input type="text" name="gname" value="{{old('gname') ?? $product->gname}}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="bname">Brand Name:</label>
            <input type="text" name="bname" value="{{old('bname') ?? $product->bname}}" class="form-control">
            <div>{{ $errors->first('bname') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="qyt">QTY:</label>
            <input type="text" name="qty" value="{{old('qty') ?? $product->qty}}" class="form-control">
            <div>{{ $errors->first('qty') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="newqty">New Stock:</label>
            <input type="text" name="newqty" value="{{old('newqty')}}" class="form-control">
            <div>{{ $errors->first('newqty') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="productorder">Delivery: </label>
            <input type="number" name="productorder" value="{{old('productorder')}}" class="form-control">
            <div>{{ $errors->first('productorder') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image">Image:</label>
                <input type="file" name="image" class="form-control">
            <div>{{ $errors->first('image') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image2">Image:</label>
                <input type="file" name="image2" class="form-control">
            <div>{{ $errors->first('image2') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image3">Image:</label>
                <input type="file" name="image3" class="form-control">
            <div>{{ $errors->first('image3') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image4">Image:</label>
                <input type="file" name="image4" class="form-control">
            <div>{{ $errors->first('image4') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image5">Image:</label>
                <input type="file" name="image5" class="form-control">
            <div>{{ $errors->first('image5') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image6">Image:</label>
                <input type="file" name="image6" class="form-control">
            <div>{{ $errors->first('image6') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image7">Image:</label>
                <input type="file" name="image7" class="form-control">
            <div>{{ $errors->first('image7') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image8">Image:</label>
                <input type="file" name="image8" class="form-control">
            <div>{{ $errors->first('image8') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image9">Image:</label>
                <input type="file" name="image9" class="form-control">
            <div>{{ $errors->first('image9') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="image10">Image:</label>
                <input type="file" name="image10" class="form-control">
            <div>{{ $errors->first('image10') }}</div>
        </div>
