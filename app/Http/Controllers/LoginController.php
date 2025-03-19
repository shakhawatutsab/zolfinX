<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(){
        return view("authentication.register", [
            "title"=> "Register",
        ]);
    }
    public function registerPost(Request $request){

        $information = $request->validate([
            "name" =>"required|max:200",
            "username" =>"required",
            "photo" =>"required|image|mimes:png,jpg",
            "email" =>"required|email|unique:users",
            "password"=> "required|min:8",
        ]);

        $user = new User;

        $user->name =$request->name;
        $user ->username = $request->username;

        $photo_name =time() . '-' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('/public/image', $photo_name);

        $user->photo = $photo_name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password );


        if($user->save() ){

            Auth::login($user);
            return redirect('/dashboard')->with('message','Registration successful');

        };





    }
    public function dashboard(){
        return view('admin.dashboard',[
            'title'=> 'Dashboard',

        ]);
    }
    public function login(){
        return view('authentication.login', [
            'title' => 'login',
        ]);
    }

    public function loginPost(Request $request){

        $credential = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password'=> 'required|min:8'

        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }else{
            redirect('login')->with('invalid','password is wrong');
        }
    }

    public function signout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
