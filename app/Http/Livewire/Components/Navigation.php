<?php

namespace App\Http\Livewire\Components;

use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Navigation extends Component
{
    public $user;
    public $userRole;
    public $isAdmin;

    public $links = [
        ['name' => 'Home', 'url' => '#'],
        ['name' => 'About', 'url' => '#'],
        ['name' => 'Contact Us', 'url' => '#'],
    ];

    public function mount()
    {
        $this->user = Auth::user() ;
        $this->userRole = $this->user !== null && $this->user !== '' ? Roles::firstWhere('id', $this->user->role) : null;
        $this->isAdmin = request()->route()->getPrefix() === '/admin' ? true : false;
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }

    public function render()
    {
        return view('livewire.components.navigation');
    }
}
