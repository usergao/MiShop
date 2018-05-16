<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
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

    public function passData(Request $request)
    {
        $data = 'hello';

        return redirect()->route('/printdata', ['data' => $data]);
    }

    public function printData(Request $request)
    {
        $right = ' world';

        $left = $request->get('data');

        echo $left.$right;
    }
}
