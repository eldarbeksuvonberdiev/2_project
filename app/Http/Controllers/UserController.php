<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index($category = null){
        $posts = Post::orderBy('id','asc')->paginate(21);
        return view('userpages.post',['posts'=>$posts]);
    }
}
