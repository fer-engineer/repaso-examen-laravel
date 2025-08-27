<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Detalle_PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'pedido' => 1,
            'producto' => 'Camiseta',
            'cantidad' => 2,
            'precio' => 25.50,
            'created_at' => now()
        ],
        [
            'pedido' => 1,
            'producto' => 'Pantalón',
            'cantidad' => 1,
            'precio' => 50.00,
            'created_at' => now()
        ],
        [
            'pedido' => 2,
            'producto' => 'Zapatos',
            'cantidad' => 1,
            'precio' => 299.99,
            'created_at' => now()
        ],
        [
            'pedido' => 3,
            'producto' => 'Gorra',
            'cantidad' => 3,
            'precio' => 15.00,
            'created_at' => now()
        ],
        [
            'pedido' => 4,
            'producto' => 'Sofá',
            'cantidad' => 1,
            'precio' => 450.75,
            'created_at' => now()
        ],
        [
            'pedido' => 5,
            'producto' => 'Calcetines',
            'cantidad' => 5,
            'precio' => 12.00,
            'created_at' => now()
        ]
    ];

    DB::table('detalle_pedidos')->insert($data);
    }
}
