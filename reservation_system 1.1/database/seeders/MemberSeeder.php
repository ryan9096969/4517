<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run()
    {
        Member::create([
            'fname'    => 'Test',
            'lname'    => 'User',
            'email'    => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
