<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $text = $request->get('text');
        #if ($measures === 'Remedied')
            
        $param = ['measures' => $measures, 'text' => $text];
        return view('sqli', $param);
    }
}
