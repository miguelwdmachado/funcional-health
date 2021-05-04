<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Banco extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('banco')->insert([
      [
        'id' => 1,
        'numero' => '999',
        'nome' => 'HealtBanc',
        'created_at' => date('Y-m-d H:i:s')
      ]
    ]);
  }
}
