<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Remedied;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    # GET /home
    public function getHome()
    {
        return view('home');
    }

    # GET /sqli
    public function getSqli()
    {
        return view('sqli');
    }

    # POST /sqli
    public function postSqli(Request $request)
    {
        $measures = $request->get('measures');
        $name = $request->get('name');
        $passwd = $request->get('passwd');
        \DB::enableQueryLog();
        if ($measures === 'unmeasured') {
            # sql文直書き
            $exists = DB::table('unmeasured')->whereRaw('user_name = \'' . $name . '\'')->whereRaw('password = \'' . $passwd . '\'')->exists();
            #dd(\DB::getQueryLog());
            if ($exists) {
                $result = 'ログイン成功!';
            } else {
                $result = 'パスワードが間違っています!';
            }
        } elseif ($measures === 'remedied') {
            # バインド
            try {
                $hash_pass = Remedied::select('password')->where('user_name', $name)->get();
                if(Hash::needsRehash($hash_pass)) {
                    $new_hash_pass = Hash::make($passwd);
                    Remedied::where('user_name', $name)->update(['password' => $new_hash_pass]);
                }
                if (Hash::check($passwd, $new_hash_pass)) {
                    $result = 'ログイン成功!';
                } else {
                    $result = 'ログイン失敗!';
                }
                #$exists = Remedied::where('user_name', $name)->where('password', $hash_pass)->exists();
                #dd(\DB::getQueryLog());
            } catch (\Exception $e) {
                #dd($e);
                $result = 'ログイン失敗!';
            }
        }
        $param = ['measures' => $measures, 'result' => $result];
        return view('sqli', $param);
    }
}
