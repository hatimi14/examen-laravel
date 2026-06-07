<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'nombre' => 'Proyecto 1',
                'descripcion' => 'Esta es la descripcion del proyecto 1',
                'fecha_inicio' => '2024-03-15',
                'fecha_fin' => '2025-03-15',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proyecto 2',
                'descripcion' => 'Esta es la descripcion del proyecto 2',
                'fecha_inicio' => '2025-03-15',
                'fecha_fin' => '2026-03-15',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proyecto 3',
                'descripcion' => 'Esta es la descripcion del proyecto 3',
                'fecha_inicio' => '2026-03-15',
                'fecha_fin' => '2027-03-15',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proyecto 4',
                'descripcion' => 'Esta es la descripcion del proyecto 4',
                'fecha_inicio' => '2027-03-15',
                'fecha_fin' => '2028-03-15',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proyecto 5',
                'descripcion' => 'Esta es la descripcion del proyecto 5',
                'fecha_inicio' => '2026-03-15',
                'fecha_fin' => '2027-03-15',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proyecto 6',
                'descripcion' => 'Esta es la descripcion del proyecto 6',
                'fecha_inicio' => '2028-03-15',
                'fecha_fin' => '2029-03-15',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
