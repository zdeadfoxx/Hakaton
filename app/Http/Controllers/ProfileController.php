<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notfy;
use App\Models\Order;
use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_order = Order::all();
        $all_Notfy = Notfy::all();
        return view('profile',compact('all_order','all_Notfy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings_profile');
    }
    public function create_order()
    {
        return view('create_orders_profile');
    }
    /**
     * Store a newly created resource in storage.
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
            ]);;
            Order::create($request);
            return redirect()->route('profile');

    }

    /**
     * Display the specified resource.
     */
    public function show__not()
    {
        $all_order = Order::all();
        return view('profile',compact('all_order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Profile $profile)
    {
        return view('notifyy');
    }
}
