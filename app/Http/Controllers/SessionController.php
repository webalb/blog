<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('session.create');
    }
    public function store()
    {

        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);


        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages(
                ['email' => 'Your Provided Credentials Could Not be Verified!']
            );
        }


                    session()->regenerate();

                    return redirect('/')->with('success', 'welcome back!');




    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
