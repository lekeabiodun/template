<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class LoginController 
{

    public function loginForm()
    {
        return view("auth.login");
    }

    public function login() 
    {
        $validated = request()->validate([
            'username'=> 'required',
            'password'=> 'required',
        ]);

        if(!Auth::attempt($validated))
        {
            return back()->withError("Invalid Credentials");
        };
        return redirect(user()->role);
    }

    public function logout()
    {
        auth()->logout();
        request()->flush();
        return redirect('login');
    }
}