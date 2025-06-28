<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategories;
use Carbon\Carbon;

class SubCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            ['id' => 1, 'category_id' => 1, 'name' => '1-on-1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'category_id' => 1, 'name' => 'Group', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'category_id' => 2, 'name' => 'Customer Analysis', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'category_id' => 2, 'name' => 'NLP', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'category_id' => 2, 'name' => 'Churn Prediction', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'category_id' => 2, 'name' => 'Classification', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'category_id' => 2, 'name' => 'Computer Vision', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'category_id' => 2, 'name' => 'Time Series', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'category_id' => 3, 'name' => 'Data Analyst', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'category_id' => 3, 'name' => 'Data Scientist', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'category_id' => 3, 'name' => 'Data Science for Beginner', 'created_at' => $now, 'updated_at' => $now],
        ];

        SubCategories::insert($data);
    }
}
