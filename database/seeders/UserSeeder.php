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
        $user = [
            [
                'nama' => 'Trihadi Putra',
                'email' => 'trihadi17@gmail.com',
                'password' => Hash::make('password123'),
                'telepon' =>  '08911281811',
                'alamat' =>  'Jalan Raya',
                'foto' => 'image.png',
                'status' => 'Aktif',
                'created_at' => now(),
                
            ],
            [
                'nama' => 'Indro Kustiawan',
                'email' => 'indrokustiawan@gmail.com',
                'password' => Hash::make('password123'),
                'telepon' =>  '081241141',
                'alamat' =>  'Jalan Tol',
                'foto' => 'image.png',
                'status' => 'Aktif',
                'created_at' => now(),
                
            ],
        ];
        User::insert($user);
    }
}
