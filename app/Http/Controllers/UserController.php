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
        return view('admin.users.create-user');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"   =>'required',
            'email'  =>'email|unique:App\Models\User',
            'photo' =>'required|image',
            'password'=>'min:8|required|confirmed',

        ]);

        $name       = $request->name;
        $username   = implode('-',explode(' ',trim (strtolower($name)) ) );
        $email      = $request->email;
        $password   = $request->password;
        $repassword = $request->repassword;

        if($password == $repassword){

        }else{
            return "password does not match";
        };
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
    public function edit(User $user)
    {
        return view('admin.users.edit-user', compact('user'));
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
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message','User remove successfully!');
    }
}
