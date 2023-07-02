<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $usersCount;
    public $usersMonth;

    public function monthlyUsersCount()
    {
        $currentYear = Carbon::now()->format('Y');

        $usersData = User::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('count(*) as total'))
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $this->usersCount = $usersData->map(function ($data) {
            return round($data->total);
        })->toJson();

        $this->usersMonth = $usersData->pluck('month')->map(function ($month) {
            return Carbon::parse($month)->format('F Y');
        });
    }

    public function mount()
    {
        $this->monthlyUsersCount();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
