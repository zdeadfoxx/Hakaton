<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistermantController extends Controller
{
    public function index(Request $request){

        return view('register');
    }
    public function dsgf(Request $request){
        $validator = $request->validate([
            'email' => ['required'],
            'phone' => ['required'],
            'name' => ['required'],
            'info' => ['string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'checkbox1' => ['required'],
            'checkbox2' => ['required'],
            'checkbox3 '=> ['required'],
        ]);

        User::create($validator);

        return redirect(route('profile'));
    }
}
