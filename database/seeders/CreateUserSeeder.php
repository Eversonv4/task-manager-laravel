<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    DB::table("users")->insert([
      "name" => "Everson",
      "email" => "everson@email.com",
      "password" => Hash::make("senhadificil"),
      "updated_at" => now(),
      "created_at" => now(),
    ]);
  }
}