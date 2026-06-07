<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
            'departamento' => 'Administración'],
            ['name' => 'hatim',
            'email' => 'hatim@hatim.com',
            'password' => bcrypt('1234'),
            'departamento' => 'Contabilidad'],
            ['name' => 'maria',
            'email' => 'maria@maria.com',
            'password' => bcrypt('1234'),
            'departamento' => 'Recursos Humanos']
            
        ]);
        
    }
}
