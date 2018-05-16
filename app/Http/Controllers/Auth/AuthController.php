<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    // 手机微信登录
    public function mobileOauth(Request $request)
    {
        return \Socialite::with('weixin')->redirect();
    }

    public function mobileCallback(Request $request)
    {
        $oauthUser = \Socialite::with('weixin')->user();

        $oauthUser = json_encode($oauthUser);

        $oauthUser = json_decode($oauthUser, true);

        dd($oauthUser);
    }


    // 网页微信登录
    public function webOauth(Request $request)
    {
        return \Socialite::with('weixinweb')->redirect();
    }

    public function webCallback(Request $request)
    {
        $oauthUser = \Socialite::with('weixinweb')->user();

        $oauthUser = json_encode($oauthUser);

        $oauthUser = json_decode($oauthUser, true);

        dd($oauthUser);
    }

    // 静默授权登录
    public function silenceOauth(Request $request)
    {
        return \Socialite::driver('weixin')->setScopes(['snsapi_base'])->redirect();
        
    }
}
