<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContaUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('conta_users')->insert([
        [
          'id' => 1,
          'user_id' => 1,
          'conta_id' => 1,
          'created_at' => date('Y-m-d H:i:s')
        ]
      ]);
    }
}
