<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'password' => 'juan123',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'María López',
            'email' => 'maria@example.com',
            'password' => 'maria456',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Carlos Hernández',
            'email' => 'carlos@example.com',
            'password' => 'carlos789',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Ana Torres',
            'email' => 'ana@example.com',
            'password' => 'ana321',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Luis Ramírez',
            'email' => 'luis@example.com',
            'password' => 'luis654',
            'created_at' => Carbon::now()
        ]
    ];

    DB::table('usuarios')->insert($data);
    }
}
