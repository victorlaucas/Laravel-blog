<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create(){
      return view('registration.create');
    }    

    public function store(){
      // Validate the form
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'

      ]);

      $user = User::create(request(['name', 'email', 'password']));

      auth()->login($user);

      \Mail::to($user)->send(new Welcome($user));

      return redirect()->home();
    }
}
