<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $data =  [
      [
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => bcrypt('rahasia'),
      ]

      ];

      User::insert($data);
    }
}
