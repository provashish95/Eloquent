<?php

namespace App\Http\Controllers;

use App\phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
   public function index(){
       $phone = phone::all();
//       $phone = DB::table('phones')
//                ->join('users','phones.user_id','users.id')
//                ->get();
       return view('numbers', compact('phone'));
   }
}
