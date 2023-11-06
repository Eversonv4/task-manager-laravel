<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateCategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table("categories")->insert([
      "title" => "tecnologia",
      "color" => "#326690",
      "user_id" => 1,
      "updated_at" => now(),
      "created_at" => now(),
    ]);
  }
}
