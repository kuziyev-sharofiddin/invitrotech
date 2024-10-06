<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::query()->create([
            'customer_name' => 'Manager',
            'email' => 'manage@company.com',
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('admin');
    }
}
