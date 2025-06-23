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
            'photo' =>'required|mimes:jpg,jpeg,png',
            'password'=>'min:8|required|confirmed',
            'password_confirmation' => 'min:8|required'

        ]);

        $user = new User;

        $user->name       = $request->name;
        $user->username   = implode('-',explode(' ',trim (strtolower($request->name)) ) );
        $user->email      = $request->email;
        $user->password   = bcrypt($request->password);

        $photo_name = $request->file('photo')->hashName();
        $request->file('photo')->storeAs('public/images',$photo_name);

        $user->photo = $photo_name;

        $user->save();

        return back()->with('message','User has been successfully done!!');

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
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:6',
            'photo' => 'nullable|image',
        ]);

        $user->name       = $request->name;
        $user->username   = implode('-',explode(' ',trim (strtolower($request->name)) ) );
        $user->email      = $request->email;
        $user->password   = bcrypt($request->password);

        if($request->file('photo') !=null){

            $photo_name = $request->file('photo')->hashName();

            $request->file('photo')->storeAs('public/images',$photo_name);

            $user->photo = $photo_name;

        }

        $user->save();

        return back()->with('message','User has been successfully done!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message','User remove successfully!');
    }

    // Update Own Profile

    public function myprofile(){

        $user = auth()->user();
        return view('admin.users.my-profile',compact('user'));
    }


}
