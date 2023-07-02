<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::updateOrCreate([
            'username' => 'chrischase011',
            'first_name' => "Christopher Robin",
            'last_name' => 'Chase',
            'email' => 'christopherchase011@gmail.com',
            'password' => Hash::make('chasechase'),
        ]);
    }
}
