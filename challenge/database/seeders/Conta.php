<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Conta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('conta')->insert([
        [
          'id' => 1,
          'agencia_id' => 1,
          'numero' => '54321',
          'digito' => '0',
          'saldo' => 0,
          'created_at' => date('Y-m-d H:i:s')
        ]
      ]);
    }
}
