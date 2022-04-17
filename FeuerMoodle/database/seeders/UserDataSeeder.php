<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserData;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserData::create([
            'user_id' => 2,
            'email' => 'csik.patrik@test.com',
            'firstname' => 'Patrik',
            'midname' => NULL,
            'lastname' => 'Csik',
            'phone' => '+36705836233',
        ]);
    }
}
