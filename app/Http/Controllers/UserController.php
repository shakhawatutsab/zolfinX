<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $keyword = request('search');
        $title = "All Users";

        $users = User::where('name','LIKE', '%'.$keyword.'%')
            ->orWhere('username','LIKE', '%'.$keyword.'%')
            ->orWhere('email','LIKE', '%'.$keyword.'%')
            ->orderBy('id','asc')->paginate(10);

        return view('admin.users.users',[
            'users' => $users,
            'keyword'=> $keyword,
            'title' => $title
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
