<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{

    public function test(Request $request) {
        $this->validate($request, [
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        return response()->json(['message' => 'Valid']);
    }

}