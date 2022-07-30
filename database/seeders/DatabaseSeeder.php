<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
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
        Admin::create([
            "email" => "admin@admin.com",
            "password" => Hash::make("123456")
        ]);

        Category::create([
            "type" => "income",
            "title" => "Salary"
        ]);
        Category::create([
            "type" => "income",
            "title" => "Bonuses"
        ]);
        Category::create([
            "type" => "income",
            "title" => "Overtime"
        ]);
        Category::create([
            "type" => "expenses",
            "title" => "Food"
        ]);
        Category::create([
            "type" => "expenses",
            "title" => "Drinks"
        ]);
        Category::create([
            "type" => "expenses",
            "title" => "Shopping"
        ]);
    }
}
