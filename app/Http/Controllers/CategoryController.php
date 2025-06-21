<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "All Categories";

        $keyword = request('search');

        $categories = Category::where('title','LIKE', '%'.$keyword.'%')
            ->orWhere('slug','LIKE', '%'.$keyword.'%')
            ->orderBy('id','desc')->paginate(5);

        return view('admin.categories.index', compact('keyword','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;

        $category_name = $request->category_name;

        $category->slug = implode('-',explode('-', $request->$category_name) );

        $category->title = $request->category_name;
        $category->thumbnail = $request->category_name;
        $category->content = $request->category_name;
        $category->excerpt = $request->category_name;
        $category->user_id = Auth::id();
        $category->views = 0;


        if( $category->save() ){
            return redirect()->back()->with('message', 'Category has been saved!');
        }
        return redirect()->back()->with('error', 'Failed to save category.');


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
    public function edit(string $id)
    {
        $title = "Edit Categories";

        $keyword = request('search');

        $current_category = Category::firstWhere('id',$id);

        $categories = Category::where('title','LIKE', '%'.$keyword.'%')
            ->orWhere('slug','LIKE', '%'.$keyword.'%')
            ->orderBy('id','desc')->paginate(5);

        return view('admin.categories.edit', compact('keyword','title','categories','current_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::firstWhere('id', $id);

        $category->title = $request->category_name;

        $category->slug = strtolower( implode( '-', explode(' ', $request->category_slug ) ) );

        $category->save();

        return back()->with('message','Category Update Successfully Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::firstWhere('id', $id);

        $category->delete();

        return redirect()->route('categories.index')->with('message','Category remove successfully!');
    }
}
