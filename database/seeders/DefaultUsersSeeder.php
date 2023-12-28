<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $system = User::create([
            'name'      => 'ACT System',
            'email'     => 'act@nmt.edu',
            'password'  => Hash::make('123456'),
        ]);
        $system->assignRole("super-admin");

        $rakib = User::create([
            'name'      => 'Rakibul Islam',
            'email'     => 'mdrakibul.islam@student.nmt.edu',
            'password'  => Hash::make('123456'),
        ]);
        $rakib->assignRole("user");
    }
}
