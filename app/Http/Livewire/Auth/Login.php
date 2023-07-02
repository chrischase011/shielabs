<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class Login extends Component
{

    use Actions;

    public $username;
    public $password;

    protected $rules = [
        'username' => ['required'],
        'password' => ['required']
    ];

    public function authenticate()
    {
        $this->validate();

        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials))
            return redirect()->intended('/');
        else
        {
            $this->dialog()->error(
                $title = 'Invalid Credentials',
                $description = 'Incorrect Username or Password'
            );
        }
    }

    public function submit(){}

    public function register()
    {
        return redirect()->route('register');
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
