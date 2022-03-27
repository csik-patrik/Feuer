<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);
        User::create([
            'username' => 'csikpatr',
            'password' => Hash::make('csikpatr'),
            'role_id' => 3
        ]);
    }
}
