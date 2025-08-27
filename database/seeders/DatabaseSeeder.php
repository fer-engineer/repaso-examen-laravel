<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ // llamamos a los seeders
            CategoriasSeeder::class,
            UsuariosSeeder::class,
            ClientesSeeder::class,
            PedidosSeeder::class,
            Detalle_PedidosSeeder::class
        ]);
        // User::factory(10)->create();

    /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
