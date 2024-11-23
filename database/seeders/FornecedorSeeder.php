<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedores')->insert(
            [
                'nome' => 'Fornecedor XYZ',
                'site' => 'fornecedorxyz.com.br',
                'created_at' => now(),
                'updated_at' => now(),
                'uf' => 'SP',
                'email' => 'contato@fornecedorxyz.com.br'  
            ]
        );

        DB::table('fornecedores')->insert(
            [
                'nome' => 'Fornecedor ABC',
                'site' => 'fornecedorabc.com.br',
                'created_at' => now(),
                'updated_at' => now(),
                'uf' => 'SP',
                'email' => 'contato@fornecedorabc.com.br'  
            ]
        );
    }
}
