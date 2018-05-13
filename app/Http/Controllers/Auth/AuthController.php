<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function oauth(Request $request)
    {
        return \Socialite::with('weixin')->redirect();
    }

    public function callback(Request $request)
    {
        $oauthUser = \Socialite::with('weixin')->user();

        dd($oauthUser);
    }
}
