<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'descripcion' => 'Descripcion 1 de tasca 1 proyecto 1',
                'completada' => false,
                'project_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Descripcion 2 de tasca 2 proyecto 1',
                'completada' => false,
                'project_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Descripcion 1 de tasca 1 proyecto 2',
                'completada' => false,
                'project_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Descripcion 2 de tasca 2 proyecto 2',
                'completada' => false,
                'project_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
