<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    User::create([
      'name' => 'Alfian Yulianto',
      'jenis_kelamin' => 'Laki-Laki',
      'alamat' => 'Jl. Pakel No 15 Pajang Laweyan Surakarta',
      'email' => 'alfianyulianto36@gmail.com',
      'no_ponsel' => '081217432366',
      'password' => Hash::make('password')
    ]);
  }
}
