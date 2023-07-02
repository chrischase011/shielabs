<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use WireUi\Traits\Actions;

class Register extends Component
{
    use Actions;

    public $username;
    public $password;
    public $password_confirmation;
    public $first_name;
    public $last_name;
    public $email;

    public $showPasswordError = false;
    public $showConfirmPasswordError = false;

    protected $rules = [
        'username' => ['required', 'unique:users'],
        'password' => ['required', 'min:8', 'confirmed'],
        'password_confirmation' => ['required'],
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email', 'unique:users'],

    ];

    public function register()
    {
        $this->validate();

        User::create([
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ]);

        session()->flash('successLogin', 'You can now login.');
        return redirect()->route('login');
    }

    public function login()
    {
        return redirect()->route('login');
    }

    public function updatedPassword($value)
    {
        $this->showPasswordError = strlen($value) < 8;
    }

    public function updatedPasswordConfirmation($value)
    {
        $this->showConfirmPasswordError = $value !== $this->password;
    }

    public function submit()
    {
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
