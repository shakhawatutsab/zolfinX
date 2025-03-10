<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $all_posts = DB::table('posts')->paginate(5);

        return view('pages.blog',[
            'posts' => $all_posts,
            'title' =>'Blog'
       ]);
    }
    public function blog2(){
        return view('pages.blog-2');
    }
    public function blog_details(){
        return view('pages.blog-details');
    }
    public function single($slug){
        $single_post = DB::table('posts')->where('slug', $slug)->first();

        return view('blog-details', [
            'data' => $single_post
       ]);
    }
}
