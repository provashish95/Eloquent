<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = post::all();
//        $post = DB::table('posts')
//                ->join('categories','posts.category_id','categories.id')
//                ->join('users','posts.user_id','users.id')
//                ->get();
        return view('posts',compact('post'));
    }
    public function post(){

//        $post = DB::table('posts')
//                ->join('categories','posts.category_id','categories.id')
//                ->join('users','posts.user_id','users.id')
//                ->where('user_id',2)
//                ->get();
        $post = post::where('user_id',2)->get();
        return view('post_by_user',compact('post'));
    }
}
