<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Purchase;
use Illuminate\Http\Request;

class AcceptController extends Controller
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
        $inventories = Inventory::all();
        $purchases = Purchase::all();

        return view('accept.index', compact('purchases', 'inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lemons = Purchase::all();
        $purchases = Purchase::all();
        $accept = new Inventory();

        return view('accept.create', compact('accept', 'purchases', 'lemons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = Purchase::find($request->id);
        $purchase->status = $request->status;
        $purchase->save();
        $inventory = Inventory::create($this->validateRequest());

        return redirect('accept/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return view('accept.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
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
            'endinv' => 'sometimes',
            'invnum' => 'sometimes',
            'totalstock' => 'sometimes',
            'stockleft' => 'sometimes',
            'stocksold' => 'sometimes',
            'product' => 'required',
            'newdel' => 'required',
            'price' => 'required',
            'product2' => 'sometimes',
            'newdel2' => 'sometimes',
            'price2' => 'sometimes',
            'product3' => 'sometimes',
            'newdel3' => 'sometimes',
            'price3' => 'sometimes',
            'product4' => 'sometimes',
            'newdel4' => 'sometimes',
            'price4' => 'sometimes',
            'product5' => 'sometimes',
            'newdel5' => 'sometimes',
            'price5' => 'sometimes',
            'product6' => 'sometimes',
            'newdel6' => 'sometimes',
            'price6' => 'sometimes',
            'product7' => 'sometimes',
            'newdel7' => 'sometimes',
            'price7' => 'sometimes',
            'product8' => 'sometimes',
            'newdel8' => 'sometimes',
            'price8' => 'sometimes',
            'product9' => 'sometimes',
            'newdel9' => 'sometimes',
            'price9' => 'sometimes',
            'product10' => 'sometimes',
            'newdel10' => 'sometimes',
            'price10' => 'sometimes',
            'total' => 'sometimes',
        ]);
    }

    public function searches(Request $request){

        $search = $_GET['search'];
        $purchases = Purchase::where('id',  $search )->get();
        $lemons = Purchase::all();

        return view('accept.create', compact('purchases', 'lemons'));
    }
}
