<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create-post',[
            'categories' => $categories,
            'title' => "Create new post"
        ]);
    }
    public function index(){

        $keyword = request('search');
        $title = "All Posts";

        $posts = Post::where('title','LIKE', '%'.$keyword.'%')
            ->orWhere('excerpt','LIKE', '%'.$keyword.'%')
            ->orWhere('content','LIKE', '%'.$keyword.'%')
            ->orderBy('id','asc')->paginate(10);

        return view('admin.posts.posts',[
            'posts' => $posts,
            'keyword'=> $keyword,
            'title' => $title
       ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' =>'required',
            'thumbnail' => 'required|image|mimes:png,jpg',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $request['slug'] = implode( explode('-',$request->title));
        $request['user_id'] = auth()->user()->id;
        $request['views'] =0;

        $image_name = $request->file('thumbnail')->hashName();

        $request->file('thumbnail')->storeAs('public/images',$image_name);

        $request ['thumbnail'] = $image_name;

        Post::create( $request->all() );

        return redirect()->route('posts.index')->with('message','Post published!');

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        $categories = Category::all();

        return view('admin.posts.edit-post',[
            'post' =>$post,
            'categories' => $categories,
            'cat' => $post-> category,


        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $post->update($request->all() );

        return back()->with('message', 'post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return back()->with('message','Post remove successfully!');

    }
}
