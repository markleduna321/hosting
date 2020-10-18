<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();

        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Product::class);

        $request['totalqty'] = $request->qty; 
        $product = Product::create($this->validateRequest());
        $this->storeImage($product);
        $this->storeImage2($product);
        $this->storeImage3($product);
        $this->storeImage4($product);
        $this->storeImage5($product);
        $this->storeImage6($product);
        $this->storeImage7($product);
        $this->storeImage8($product);
        $this->storeImage9($product);
        $this->storeImage10($product);

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request['qty'] = $request->qty + $request->newqty;
        $request['qty'] = $request->qty - $request->productorder; 
        $product->update($this->validateRequest());

        $this->storeImage($product);
        $this->storeImage2($product);
        $this->storeImage3($product);
        $this->storeImage4($product);
        $this->storeImage5($product);
        $this->storeImage6($product);
        $this->storeImage7($product);
        $this->storeImage8($product);
        $this->storeImage9($product);
        $this->storeImage10($product);

        return redirect('product/' . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('product');
    }

    private function validateRequest(){

        return request()->validate([
            'gname' => 'required|min:3',
            'bname' => 'required',
            'qty' => 'required',
            'newqty' => 'sometimes',
            'productorder' => 'sometimes',
            'totalqty' => 'sometimes',
            'image' => 'sometimes|file|image|max:7000',
            'image2' => 'sometimes|file|image|max:7000',
            'image3' => 'sometimes|file|image|max:7000',
            'image4' => 'sometimes|file|image|max:7000',
            'image5' => 'sometimes|file|image|max:7000',
            'image6' => 'sometimes|file|image|max:7000',
            'image7' => 'sometimes|file|image|max:7000',
            'image8' => 'sometimes|file|image|max:7000',
            'image9' => 'sometimes|file|image|max:7000',
            'image10' => 'sometimes|file|image|max:7000',
        ]);
    }

    public function storeImage($product){

        if (request()->has('image')){

            $product->update([

                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage2($product){

        if (request()->has('image2')){

            $product->update([

                'image2' => request()->image2->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage3($product){

        if (request()->has('image3')){

            $product->update([

                'image3' => request()->image3->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage4($product){

        if (request()->has('image4')){

            $product->update([

                'image4' => request()->image4->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage5($product){

        if (request()->has('image5')){

            $product->update([

                'image5' => request()->image5->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage6($product){

        if (request()->has('image6')){

            $product->update([

                'image6' => request()->image6->store('uploads', 'public'),
            ]);
        }
    }
    
    public function storeImage7($product){

        if (request()->has('image7')){

            $product->update([

                'image7' => request()->image7->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage8($product){

        if (request()->has('image8')){

            $product->update([

                'image8' => request()->image8->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage9($product){

        if (request()->has('image9')){

            $product->update([

                'image9' => request()->image9->store('uploads', 'public'),
            ]);
        }
    }

    public function storeImage10($product){

        if (request()->has('image10')){

            $product->update([

                'image10' => request()->image10->store('uploads', 'public'),
            ]);
        }
    }
}
