<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Session;

class AuthController extends Controller
{
    public function getloginForm()
    {
    	return view('auth.login');
    }
    public function getregisterForm()
    {
        return view('auth.register');
    }
    public function postregisterForm(Request $request)
    {
        //validate the data
       // $this->validate($request, array(
        //    'name' => 'required| min:3',
          //  'email' => 'required | min:5 | max:255'
          //  ));
        //store in the database

        $user = new User;

        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password =  $request->password;

        $user->save();
        //redirect to anather page

        Session::flash('success', 'the blog post was sucessfully save!');

        return redirect()->route('auth.login');
    }

    public function login(Request $request)
    {
    	return redirect()->route('dashboard');
    }

    public function showRegistrationPage()
    {

    }

    public function register(Request $request)
    {
    	
    }
}
