<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    // Fonction index
    public function index($usr = null){
        $posts = Post::latest()->paginate(6);
       
        return view('/home')->with([
            'posts'=> $posts,
        
        ]);
}

}