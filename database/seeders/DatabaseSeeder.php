<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
use Database\Factories\ProductoFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // // User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // ]);
       User::factory(10)->create();
       Categoria::Factory(10)->create();
       Producto::Factory(10)->create();

    }
}
