<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\Controller;
use SmallMvcSystem\Validation\Validator;

class RegisterController
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validator = new Validator();
        $validator->setRules([
            'name' => 'required|alnum|between:8,32',
            'username' => 'required|alnum|between:8,32|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alnum|between:8,32|confirmed',
            'password_confirmation' => 'required|alnum|between:8,32'
        ]);

        $validator->setAliases([
            'password_confirmation' => 'Password confirmation'
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        User::create([
            'id'=> null,
            'username' => request('username'),
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        app()->session->setFlash('success', 'Registered sucessfully :D');

        return back();
    }
}