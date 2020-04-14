<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    //
    public function login  (Request $request)
    {
        echo '<pre>';print_r($request->input());echo '</pre>';







    }












}
