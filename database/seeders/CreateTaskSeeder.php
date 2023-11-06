<?php

namespace Database\Seeders;

use DateTime;
use DateTimeZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateTaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime("now", $timezone);
    $date_tomorrow = $date->modify("+1 day");

    DB::table("tasks")->insert([
      "title" => "Estudar o curso do FullCycle",
      "description" => "Terminar todo o curso do fullcycle e fazer os exercícios",
      "due_date" => $date_tomorrow,
      "user_id" => 1,
      "category_id" => 1,
      "created_at" => $date,
      "updated_at" => $date
    ]);
  }
}
