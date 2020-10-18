<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Purchase;
use Illuminate\Http\Request;

class InventoryController extends Controller
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
        $inventories = Inventory::paginate(5);

        return view('inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit', compact('inventory'));
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
        
        $inventory->update($this->validateRequest());

        return redirect('inventory/' . $inventory->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect('inventory');
    }

    private function validateRequest(){

        return request()->validate([
            'user_email' => 'sometimes',
            'id' => 'sometimes',
            'name' => 'sometimes|min:3',
            'address' => 'sometimes',
            'contact' => 'sometimes',
            'phone' => 'sometimes',
            'type' => 'sometimes',
            'status' => 'required',
            'endinv' => 'sometimes',
            'invnum' => 'sometimes',
            'totalstock' => 'sometimes',
            'stockleft' => 'sometimes',
            'stocksold' => 'sometimes',
            'newdel' => 'sometimes',
            'endinv2' => 'sometimes',
            'invnum2' => 'sometimes',
            'totalstock2' => 'sometimes',
            'stockleft2' => 'sometimes',
            'stocksold2' => 'sometimes',
            'newdel2' => 'sometimes',
            'endinv3' => 'sometimes',
            'invnum3' => 'sometimes',
            'totalstock3' => 'sometimes',
            'stockleft3' => 'sometimes',
            'stocksold3' => 'sometimes',
            'newdel3' => 'sometimes',
            'endinv4' => 'sometimes',
            'invnum4' => 'sometimes',
            'totalstock4' => 'sometimes',
            'stockleft4' => 'sometimes',
            'stocksold4' => 'sometimes',
            'newdel4' => 'sometimes',
            'endinv5' => 'sometimes',
            'invnum5' => 'sometimes',
            'totalstock5' => 'sometimes',
            'stockleft5' => 'sometimes',
            'stocksold5' => 'sometimes',
            'newdel5' => 'sometimes',
            'endinv6' => 'sometimes',
            'invnum6' => 'sometimes',
            'totalstock6' => 'sometimes',
            'stockleft6' => 'sometimes',
            'stocksold6' => 'sometimes',
            'newdel6' => 'sometimes',
            'endinv7' => 'sometimes',
            'invnum7' => 'sometimes',
            'totalstock7' => 'sometimes',
            'stockleft7' => 'sometimes',
            'stocksold7' => 'sometimes',
            'newdel7' => 'sometimes',
            'endinv8' => 'sometimes',
            'invnum8' => 'sometimes',
            'totalstock8' => 'sometimes',
            'stockleft8' => 'sometimes',
            'stocksold8' => 'sometimes',
            'newdel8' => 'sometimes',
            'endinv9' => 'sometimes',
            'invnum9' => 'sometimes',
            'totalstock9' => 'sometimes',
            'stockleft9' => 'sometimes',
            'stocksold9' => 'sometimes',
            'newdel9' => 'sometimes',
            'endinv10' => 'sometimes',
            'invnum10' => 'sometimes',
            'totalstock10' => 'sometimes',
            'stockleft10' => 'sometimes',
            'stocksold10' => 'sometimes',
            'newdel10' => 'sometimes',
            'product' => 'sometimes',
            'amount' => 'sometimes',
            'price' => 'sometimes',
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
}
