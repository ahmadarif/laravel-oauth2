<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Oauth2Controller extends Controller
{

    public function profil(Request $request) {
        $data = $request->user();
        return response()->json(compact('data'));
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $request->user()->token()->id)
            ->update(['revoked' => true]);

        return response()->json([
            'message' => 'You are Logged out.'
        ]);
    }

}