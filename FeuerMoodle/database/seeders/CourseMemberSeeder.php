<?php

namespace Database\Seeders;

use App\Models\CourseMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseMember::create([
            'course_id' => '1',
            'user_id' => '2',
        ]);
        CourseMember::create([
            'course_id' => '2',
            'user_id' => '2',
        ]);
        CourseMember::create([
            'course_id' => '3',
            'user_id' => '2',
        ]);
    }
}
