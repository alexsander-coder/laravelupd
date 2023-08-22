<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        Cliente::factory(10)->create();
    }
}
