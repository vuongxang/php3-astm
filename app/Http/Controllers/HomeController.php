<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->keyword){
        
            $posts = Post::where(
                    'title', 'like', "%".$request->keyword."%"
                )->paginate(10);
            $posts->withPath('?keyword=' . $request->keyword);
        }else{
            $posts = Post::paginate(10);
        }

        
        return view('home', [
            'posts' => $posts,
            'keyword' => $request->keyword
        ]);
    }
}
