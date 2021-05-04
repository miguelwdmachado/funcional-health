<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Agencia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('agencia')->insert([
        [
          'id' => 1,
          'banco_id' => 1,
          'numero' => '0001',
          'nome' => 'Cidade',
          'created_at' => date('Y-m-d H:i:s')
        ]
      ]);
    }
}
