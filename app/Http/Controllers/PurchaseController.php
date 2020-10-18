<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Account;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PurchaseController extends Controller
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
        $purchases = Purchase::all();

        return view('purchase.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $accounts = Account::all();
        $purchase = new Purchase();

        return view('purchase.create', compact('accounts', 'products', 'purchase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['total'] = $request->amount * $request->price 
        + $request->amount2 * $request->price2
        + $request->amount3 * $request->price3
        + $request->amount4 * $request->price4 
        + $request->amount5 * $request->price5
        + $request->amount6 * $request->price6
        + $request->amount7 * $request->price7
        + $request->amount8 * $request->price8
        + $request->amount9 * $request->price9
        + $request->amount10 * $request->price10;
        $purchase = Purchase::create($this->validateRequest());

        return redirect('purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('purchase.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        $products = Product::all();
        $accounts = Account::where('name',  '' )->get();

        return view('purchase.edit', compact('purchase', 'accounts', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request['total'] = $request->amount * $request->price 
        + $request->amount2 * $request->price2
        + $request->amount3 * $request->price3
        + $request->amount4 * $request->price4 
        + $request->amount5 * $request->price5
        + $request->amount6 * $request->price6
        + $request->amount7 * $request->price7
        + $request->amount8 * $request->price8
        + $request->amount9 * $request->price9
        + $request->amount10 * $request->price10;
        $purchase->update($this->validateRequest());

        return redirect('purchase/' . $purchase->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect('purchase');
    }

    private function validateRequest(){

        return request()->validate([
            'user_email' => 'required',
            'name' => 'required|min:3',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'status' => 'required',
            'product' => 'required',
            'amount' => 'required',
            'price' => 'required',
            'product2' => 'sometimes',
            'amount2' => 'sometimes',
            'price2' => 'sometimes',
            'product3' => 'sometimes',
            'amount3' => 'sometimes',
            'price3' => 'sometimes',
            'product4' => 'sometimes',
            'amount4' => 'sometimes',
            'price4' => 'sometimes',
            'product5' => 'sometimes',
            'amount5' => 'sometimes',
            'price5' => 'sometimes',
            'product6' => 'sometimes',
            'amount6' => 'sometimes',
            'price6' => 'sometimes',
            'product7' => 'sometimes',
            'amount7' => 'sometimes',
            'price7' => 'sometimes',
            'product8' => 'sometimes',
            'amount8' => 'sometimes',
            'price8' => 'sometimes',
            'product9' => 'sometimes',
            'amount9' => 'sometimes',
            'price9' => 'sometimes',
            'product10' => 'sometimes',
            'amount10' => 'sometimes',
            'price10' => 'sometimes',
            'total' => 'sometimes',
        ]);
    }

    public function search(Request $request){

        $purchase = new Purchase();
        $products = Product::all();
        $search = $_GET['search'];
        $accounts = Account::where('name',  $search )->get();

        return view('purchase.create', compact('accounts', 'products', 'purchase'));
    }
}
