<?php

namespace App\Http\Controllers;

use App\Models\Notfy;
use Illuminate\Http\Request;

class NofyController extends Controller
{
    public function add_notifyy(Request $request)
    {
        $request = request()->validate([
            'add_notifyy' => 'string',
        ]);
        Notfy::create($request);
    }
}
