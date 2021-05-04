<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
              'id' => 1,
              'name' => 'USUARIO CORRENTISTA',
              'email' => 'usuario@correntista.com.br',
              'password' => bcrypt('senha123456'),
              'created_at' => date('Y-m-d H:i:s')
          ]
      ]);
    }
}
