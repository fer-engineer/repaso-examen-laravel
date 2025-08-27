<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'cliente_id' => 1, // Cliente con código 1
            'fecha' => '2025-08-01',
            'total' => 150.50,
            'created_at' => now()
        ],
        [
            'cliente_id' => 2,
            'fecha' => '2025-08-02',
            'total' => 299.99,
            'created_at' => now()
        ],
        [
            'cliente_id' => 3,
            'fecha' => '2025-08-03',
            'total' => 75.00,
            'created_at' => now()
        ],
        [
            'cliente_id' => 4,
            'fecha' => '2025-08-04',
            'total' => 450.75,
            'created_at' => now()
        ],
        [
            'cliente_id' => 5,
            'fecha' => '2025-08-05',
            'total' => 120.00,
            'created_at' => now()
        ]
    ];

    DB::table('pedidos')->insert($data);
    }
}
