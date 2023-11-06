<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\TaskFactory;
use Database\Seeders\CreateUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    $this->call([
      CreateUserSeeder::class,
      // CreateCategoriesSeeder::class,
      // CreateTaskSeeder::class,
    ]);

    CategoryFactory::factory(5)->create();
    TaskFactory::factory(5)->create();
  }
}
