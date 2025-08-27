<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'nombre' => 'Ropa',
            'descripcion' => 'Ropa de todo tipo',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Zapatos',
            'descripcion' => 'Zapatos de toda medida',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Electrónica',
            'descripcion' => 'Dispositivos y accesorios electrónicos',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Hogar',
            'descripcion' => 'Artículos para el hogar y la cocina',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Juguetes',
            'descripcion' => 'Juguetes para todas las edades',
            'created_at' => Carbon::now()
        ]
    ];

    DB::table('categorias')->insert($data);
    }
}
