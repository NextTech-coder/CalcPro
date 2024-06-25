<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
           [
               "name" => "Финансовые калькуляторы",
               "slug" => "financial",
               "parent_id" => null,
           ],
            [
                "name" => "Калькуляторы для инвестиций",
                "slug" => "investment",
                "parent_id" => null,
            ],
            [
                "name" => "Бухгалтерия и налоги",
                "slug" => "financial",
                "parent_id" => null,
            ],
            [
                "name" => "Финансовые калькуляторы",
                "slug" => "accounting",
                "parent_id" => null,
            ],
            [
                "name" => "Автомобильные калькуляторы",
                "slug" => "cars",
                "parent_id" => null,
            ],
            [
                "name" => "Математические калькуляторы",
                "slug" => "match",
                "parent_id" => null,
            ],
            [
                "name" => "Калькуляторы для здоровья",
                "slug" => "health",
                "parent_id" => null,
            ],
            [
                "name" => "Калькуляторы для бизнеса",
                "slug" => "business",
                "parent_id" => null,
            ],
            [
                "name" => "Конвертеры",
                "slug" => "converters",
                "parent_id" => null,
            ],
            [
                "name" => "Строительные калькуляторы",
                "slug" => "construction",
                "parent_id" => null,
            ],
            [
                "name" => "Калькуляторы для здоровья",
                "slug" => "health",
                "parent_id" => null,
            ],
            [
                "name" => "Калькулятор веса",
                "slug" => "brok",
                "parent_id" => 7,
            ],
        ]);
    }
}
