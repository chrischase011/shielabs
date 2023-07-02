<?php

namespace App\Http\Livewire\Components;

use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public $user;
    public $userRole;

    public $links = [
        ['name' => 'Home', 'url' => '#'],
        ['name' => 'About', 'url' => '#'],
        ['name' => 'Contact Us', 'url' => '#'],
    ];

    public function mount()
    {
        $this->user = Auth::user() ;
        $this->userRole = $this->user !== null && $this->user !== '' ? Roles::firstWhere('id', $this->user->role) : null;
    }

    public function logout()
    {
        Auth::logout();

        return bacK();
    }

    public function render()
    {
        return view('livewire.components.navigation');
    }
}
