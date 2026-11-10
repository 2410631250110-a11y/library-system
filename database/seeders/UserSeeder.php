<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'email' => 'admin@example.com',
                'name' => 'Admin Perpustakaan',
                'role' => 'admin',
            ],
            [
                'email' => 'petugas@example.com',
                'name' => 'Petugas Perpustakaan',
                'role' => 'petugas',
            ],
        ];

        foreach ($users as $data) {
            $user = User::firstOrNew(['email' => $data['email']]);
            $user->fill($data);

            if (! $user->exists) {
                $user->password = Hash::make('password123');
            }

            $user->save();
        }
    }
}
