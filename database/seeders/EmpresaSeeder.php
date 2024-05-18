<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nombre' => 'INSTITUTO TILUCHI S.R.L.',
            'nit' => '123456',
            'direccion' => 'AV. 6TO ANILLO Y AV MOSCU',
            'telefono' => '12345',
            'ciudad' => 'SANTA CRUZ - BOLIVIA',
        ]);
    }
}
