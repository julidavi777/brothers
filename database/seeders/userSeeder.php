<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'pedidos@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
            'role'=>'1'
        ]);
    }
}
