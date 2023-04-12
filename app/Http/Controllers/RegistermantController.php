<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistermantController extends Controller
{
    protected function create(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'firstname' => ['required'],
            'name' => ['required'],
            'lastname' => ['required'],
            'info' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        dd($data);
    }
}
