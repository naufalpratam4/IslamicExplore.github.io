<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Users')->insert(
            [
                [
                    'name' => 'Admin',
                    'email' => 'Admin@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role_id' => 1
                ],
                [
                    'name' => 'User',
                    'email' => 'User@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role_id' => 2
                ],
            ]
        );
    }
}
