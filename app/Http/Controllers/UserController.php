<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $token = $request->session()->token();

        $token = csrf_token();
        return $req->input();
    }
}