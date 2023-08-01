<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Remedied;
use App\Models\Csrfuser;

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
                $obj = Remedied::select('password')->where('user_name', $name)->get();
                foreach ($obj as $data) {
                    $hash_pass = $data->password;
                }
                if (Hash::check($passwd, $hash_pass)) {
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

    # GET /xss
    public function getXss() {
        $example = "<script>location.href = 'https://www.oca.ac.jp/';</script>";
        return view('xss', ['example' => $example]);
    }
    # POST /xss
    public function postXss(Request $request) {
        $mode = $request->get('measures');
        $example = "<script>location.href = 'https://www.oca.ac.jp/';</script>";
        $result = $request->get('text');
        if ($mode === 'unmeasured') {
            $param = ['example' => $example, 'result_unm' => $result];
            return view('xss', $param);
        } elseif ($mode === 'remedied') {
            $param = ['example' => $example, 'result_rem' => $result];
            return view('xss', $param);
        }
    }

    # GET /csrf/unmeasured/login
    public function getCsrfLogin() {
        return view('csrf_login');
    }
    # POST /csrf/unmeasured/login
    public function postCsrfLogin(Request $request) {
        $mode = $request->get('measures');
        $name = $request->get('name');
        $pass = $request->get('password');
        $obj = Csrfuser::select('password', 'email')->where('name', $name)->get();
        foreach ($obj as $data) {
            $hash_pass = $data->password;
            $email = $data->email;
        }
        if (Hash::check($pass, $hash_pass)) {
            if ($mode === 'unmeasured') {
                $request->session()->put('id', '1');
                $param = ['name' => $name, 'email' => $email];
                return view('csrf_user_page', $param);
            }
        } else {
            return view('csrf_login');
        }
    }
    # GET /csrf/unmeasured/edit
    public function getCsrfEdit(Request $request) {
        $user_id = $request->session()->get('id');
        $obj = Csrfuser::select('name', 'email')->where('id', $user_id)->get();
        foreach ($obj as $data) {
            $name = $data->name;
            $email = $data->email;
        }
        $param = ['name' => $name, 'email' => $email];
        return view('csrf_edit', $param);
    }
    # POST /csrf/unmeasured/edit
    public function postCsrfEdit(Request $request) {
        $new_name = $request->get('new_name');
        $new_email = $request->get('new_email');
        $user_id = $request->session()->get('id');
        $update_column = ['name' => $new_name, 'email' => $new_email];
        Csrfuser::where('id', $user_id)->update($update_column);
        $msg = '更新しました。';
        $obj = Csrfuser::select('name', 'email')->where('id', $user_id)->get();
        foreach ($obj as $data) {
            $name = $data->name;
            $email = $data->email;
        }
        $param = ['name' => $name, 'email' => $email, 'msg' => $msg];
        return view('csrf_user_page', $param);
    }
    # GET /csrf/unmeasured/fake
    public function getCsrfFake() {
        return view('csrf_fake');
    }

    # POST /csrf/remedied/login
    public function postCsrfRemLogin(Request $request) {
        $name = $request->get('name');
        $passwd = $request->get('password');
        $obj = Csrfuser::select('email', 'password')->where('name', $name)->get();
        foreach ($obj as $data) {
            $email = $data->email;
            $hash_pass = $data->password;
        }
        if (Hash::check($passwd, $hash_pass)) {
            $request->session()->put('remedied', '2');
            $param = ['name' => $name, 'email' => $email];
            return view('csrf_rem_user_page', $param);
        } else {
            return view('csrf_login');
        }
    }
    # GET /csrf/remedied/edit
    public function getCsrfRemEdit(Request $request) {
        $user_id = $request->session()->get('remedied');
        $obj = Csrfuser::select('name', 'email')->where('id', $user_id)->get();
        foreach ($obj as $data) {
            $name = $data->name;
            $email = $data->email;
        }
        $param = ['name' => $name, 'email' => $email];
        return view('csrf_rem_edit', $param);
    }
    # POST /csrf/remedied/edit
    public function postCsrfRemEdit(Request $request) {
        $user_id = $request->session()->get('remedied');
        $new_name = $request->get('new_name');
        $new_email = $request->get('new_email');
        $update_column = ['name' => $new_name, 'email' => $new_email];
        Csrfuser::where('id', $user_id)->update($update_column);
        $msg = '更新しました。';
        $obj = Csrfuser::select('name', 'email')->where('id', $user_id)->get();
        foreach ($obj as $data) {
            $name = $data->name;
            $email = $data->email;
        }
        $param = ['name' => $name, 'email' => $email, 'msg' => $msg];
        return view('csrf_rem_user_page', $param);
    }
    # GET /csrf/remedied/fake
    public function getCsrfRemFake() {
        return view('csrf_rem_fake');
    }
}
