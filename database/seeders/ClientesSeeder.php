<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'nombre' => 'Pedro Sánchez',
            'telefono' => '7777-1111',
            'direccion' => 'San Salvador, Centro',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Lucía Gómez',
            'telefono' => '5777-5555',
            'direccion' => 'Santa Ana, Colonia Libertad',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Roberto Díaz',
            'telefono' => '7777-2222',
            'direccion' => 'San Miguel, Barrio El Calvario',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Carmen Rodríguez',
            'telefono' => '7777-4444',
            'direccion' => 'La Libertad, Antiguo Cuscatlán',
            'created_at' => Carbon::now()
        ],
        [
            'nombre' => 'Miguel Castro',
            'telefono' => '7777-3333',
            'direccion' => 'Soyapango, San Salvador',
            'created_at' => Carbon::now()
        ]
    ];

    DB::table('clientes')->insert($data);
    }
}
