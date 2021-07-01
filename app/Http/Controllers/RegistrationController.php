<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class RegistrationController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'company_name' => 'required_if:user_type_id,2'
        ]);

        $user = User::create(request(['user_type_id','name', 'email', 'company_name', 'phone_number', 'password', 'confirm_password']));

        $user->save();
        //auth()->login($user);

        return redirect()->to('/')->with('success', 'User created successfully.');
    }
}
