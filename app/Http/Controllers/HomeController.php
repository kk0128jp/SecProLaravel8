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
                #dd(Hash::needsRehash($hash_pass));
                if(Hash::needsRehash($hash_pass)) {
                    $new_hash_pass = Hash::make($passwd);
                    #dd(Hash::needsRehash($new_hash_pass));
                    Remedied::where('user_name', $name)->update(['password' => $new_hash_pass]);
                }
                if (Hash::check('taro', $new_hash_pass)) {
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

    # GET /os-com-i
    public function getOsComI()
    {
        return view('os_com_i');
    }
    # POST /os-com-i
    public function postOsComI(Request $request)
    {
        $command = $request->get('command');
        try {
            $result = shell_exec($command);
            $utf8 = iconv('Shift_JIS', 'UTF-8', $result);
        } catch (\Exceptin $e) {
            $result = 'エラー!';
        }
        $param = ['command' => $command, 'result' => $utf8];
        return view('os_com_i', $param);
    }

    # GET /path-i
    public function getPathI()
    {
        return view('path_i');
    }
    # POST /path-i
    public function postPathI(Request $request)
    {
        $mode = $request->get('measures');
        if ($mode === 'unmeasured') {
            $path = $request->get('path');
        } elseif ($mode === 'remedied') {
            $path = basename($request->get('path'));
        }
        try {
            include($path);
        } catch (\Exception $e) {
            $e_msg = '取得できませんでした';
            return view('path_i', ['e_msg' => $e_msg]);
        }
        return view('path_i');
    }
}
