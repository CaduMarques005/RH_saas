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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Cadu Marques',
            'email' => 'cadugoleiro12@gmail.com',
            'password' => bcrypt('123456'),
            'telefone' => '123455667',
            'nascimento' => '2000-01-01',
            'salario' => '1000.00',
            'admissao' => '2000-01-01',
            'permissao' => 'dono',
            'endereco_id' => '1',
            'cargo_id' => '1',
            'beneficio_id' => '1',
            'contrato_id' => '1',
        ]);
    }
}
