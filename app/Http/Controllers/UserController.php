<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
        $user=user::all();
        return view('numbers', compact('user'));
    }

}
