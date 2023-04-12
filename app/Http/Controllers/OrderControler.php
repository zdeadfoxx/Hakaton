<?php

namespace App\Http\Controllers;

use App\Models\Notfy;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_order = Order::all();
        return view('list_orders',compact('all_order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'order__name' => 'string',
            'order__info' => 'string',
            'order__price_ot' => 'string',
            'order__price_do' => 'string',
            'order__price_time' => 'string',
            'order__price_place' => 'string',
        ]);
        Order::create($request);
        return redirect()->route('profile');
    }
    public function add_notifyy(Request $request)
    {
        $request = request()->validate([
            'add_notifyy' => 'string',
        ]);
        Notfy::create($request);
        return redirect()->route('list_orders');
    }
    /**
     * Store a newly created resource in storage.



     * Display the specified resource.
     */
    public function show()
    {
        $all_notifyy = Order::all();
        return view('list_orders',compact('all_notifyy'));
    }

    public function update($id)
    {
        $find_order = Order::findOrFail($id);
        return view('list_orders',compact('find_order'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $historyOrder)
    {
        //
    }
}
