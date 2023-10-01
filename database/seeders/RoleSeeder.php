<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrativo = Role::create(['name' => 'administrativo']);
        $gerente = Role::create(['name' => 'gerente']);
        $asesor = Role::create(['name' => 'asesor']);
        $repartidor = Role::create(['name' => 'repartidor']);

    }
}
